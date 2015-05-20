<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;
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

	public function getIsCompleteAttribute()
	{
		if($this->size && $this->origin && $this->destination && $this->typeable_id && $this->typeable_type)
		{
			if($shipment->typeable_type == '')
			{
				$v = Validator::make($input,
					[
						'collect_after' => 'required|date_format:d.m.Y H:i|after:'.Carbon::now(),
						'deliver_after' => 'required|date_format:d.m.Y H:i|after:'.Carbon::createFromFormat('d.m.Y H:i', $input['collect_after'])->addHours(3),
					]
				);
			}
			if($v->fails())
			{
				return redirect()->back()->withErrors($v->errors());
			}
		}
		return false;
	}
}
