<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model {

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
			return true;
		}
		return false;
	}
}
