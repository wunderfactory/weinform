<?php namespace Wundership;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Validator;
use Wundership\Traits\Publishes;

class Shipment extends Model {
	use Publishes;

	static $rules = [
		'title'     => ''
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
		return [false, 'if ding'];
	}

	public function getIsCompleteAttribute()
	{
		return $this->validateIsComplete()[0];
	}
}
