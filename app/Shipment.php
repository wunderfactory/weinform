<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model {

	protected $appends = ['is_published'];

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

	public function isPublishedAttribute()
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
}
