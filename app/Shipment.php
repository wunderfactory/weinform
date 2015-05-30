<?php namespace Wundership;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Wundership\Traits\Publishes;

class Shipment extends Model {
	use Publishes;

	static $rules = [
		'title'     => 'required|string|between:5,32'
	];

	static $publishing_rules = [
		//TODO
	];

	public function getDates()
	{
		return [
			'created_at',
			'updated_at',
			'collect_after',
			'deliver_after',
			'collect_before',
			'deliver_before',
		];
	}

	protected $appends = [
		'is_published',
		'is_complete'
	];

	public function user()
	{
		return $this->belongsTo('Wundership\User');
	}

	public function driver()
	{
		return $this->belongsTo('Wundership\User', 'driver_id');
	}

	public function typeable()
	{
		return $this->morphTo();
	}

	public function size()
	{
		return $this->belongsTo('Wundership\Size');
	}

	public function specs()
	{
		return $this->belongsToMany('Wundership\Spec');
	}

	public function origin()
	{
		return $this->belongsTo('Wundership\Address', 'origin_id');
	}

	public function destination()
	{
		return $this->belongsTo('Wundership\Address', 'destination_id');
	}

	public function getIsPublishedAttribute()
	{
		if($this->published_at == null)
		{
			return false;
		}
		else
		{
			return [
				'is_published' => true,
				'published_at' => $this->attributes['published_at']
			];
		}
	}

	public function validateIsComplete()
	{
		if($this->size
			&& $this->origin
			&& $this->destination
			&& $this->typeable_id
			&& $this->typeable_type
			&& $this->collect_after != ''
			&& $this->collect_before != ''
			&& $this->deliver_after != ''
			&& $this->deliver_before != '')
		{
			$rules = [
				'typeable_id' => 'required',
				'typeable_type' => 'required'
			];
			if($this->typeable_type == 'Wundership\Immediate')
			{
				$rules = array_merge($rules, [
					'collect_after' => 'required|after:' . Carbon::now()->addHours(3),
					'collect_before' => 'required|after:' . $this->collect_after->addHours(3)->subSecond(),
					'deliver_after' => 'required|after:' . $this->collect_before->addHours(3),
					'deliver_before' => 'required|after:' . $this->deliver_after->addHours(3)->subSecond(),
				]);
			}
			else
			{
				$rules = array_merge($rules, [
					'collect_after' => 'required|after:' . Carbon::now()->addHours(3),
					'collect_before' => 'required|after:' . $this->collect_after->addHours(3),
					'deliver_after' => 'required|after:' . $this->collect_before->addHours(3),
					'deliver_before' => 'required|after:' . $this->deliver_after->addHours(3),
				]);
			}

			$v = Validator::make([
				'typeable_id' => $this->typeable_id,
				'typeable_type' => $this->typeable_type,
				'collect_after' => $this->collect_after,
				'collect_before' => $this->collect_before,
				'deliver_after' => $this->deliver_after,
				'deliver_before' => $this->deliver_before
			], $rules);

			if($v->fails())
			{
				return [false, $v->messages()];
			}
			else
			{
				return [true];
			}
		}
		return [false];
	}

	public function getIsCompleteAttribute()
	{
		return $this->validateIsComplete()[0];
	}

	public function publish()
	{
		$val = $this->validateIsComplete();
		if($val[0])
		{
			$this->published_at = Carbon::now();
			$this->save();
			return $val;
		}
		else
		{
			return $val[0];
		}
	}

	public function scopeOfType($query, $type)
	{
		switch($type)
		{
			case 'immediate':
				return $query->where('typeable_type', 'Wundership\Immediate');
				break;
			case 'auction':
				return $query->where('typeable_type', 'Wundership\Auction');
				break;
			default:
				return $query;
		}
	}

	public function scopeFromOrigin($query, $city)
	{
		if($city == 'any')
		{
			return $query;
		}
		return $query->whereHas('origin', function($q) use ($city)
		{
			$q->where('city', $city);
		});
	}

	public function scopeToDestination($query, $city)
	{
		if($city == 'any')
		{
			return $query;
		}
		return $query->whereHas('destination', function($q) use ($city)
		{
			$q->where('city', $city);
		});
	}

	public function scopeShipsOn($query, $date)
	{
		if($date == 'any')
		{
			return $query;
		}
		$date = new Carbon($date);
		return $query->where('collect_after', 'like', $date->toDateString() . '%');
	}

	public function scopeOnlySizes($query, $sizes)
	{
		if(!is_array($sizes))
		{
			return $query;
		}
		$query = $query->where(function($query) use ($sizes)
		{
			foreach($sizes as $size)
			{
				$query = $query->orWhere('size_id', $size);
			}
		});
		return $query;
	}

	public function scopeWithoutSpecs($query, $specs)
	{
		if(!is_array($specs))
		{
			return $query;
		}
		$query = $query->whereHas('specs', function($query) use ($specs)
		{
			$query->whereNotIn('id', $specs);
		});
		return $query;
	}

	public function scopeVia($query, $via)
	{
		if(!is_array($via))
		{
			return $query;
		}
		$query = $query->where(function($query) use ($via)
		{
			for($i = 0; $i < count($via); $i++)
			{
				$from = $via[$i];
				foreach(array_slice($via, $i) as $to)
				{
					$query = $query->orWhere(function($query) use ($via, $from, $to)
					{
						$query->fromOrigin($from);
						$query->toDestination($to);
					});
				}
			}
		});
		return $query;
	}
}
