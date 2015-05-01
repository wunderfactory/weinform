<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model {

	static $rules = [
		'address_from' => 'required|exists:addresses,id',
		'address_to' => 'required|exists:addresses,id|different:address_from',
		'km_price' => 'required|numeric|between:0.04,0.09',
		'start' => 'required|date_format:Y-m-d H:i:s'
	];

	protected $fillable = [
		'address_from',
		'address_to',
		'km_price',
		'start'
	];

	protected $casts = [
		'is_published' => 'boolean'
	];

	public function user()
	{
		return $this->belongsTo('Wundership\User');
	}

	public function segments()
	{
		return $this->hasMany('Wundership\Segment');
	}

	public function bookings()
	{
		return $this->hasMany('Wundership\Booking');
	}

	public function from()
	{
		return $this->belongsTo('Wundership\Address', 'address_from');
	}

	public function to()
	{
		return $this->belongsTo('Wundership\Address', 'address_to');
	}

	public function getDates()
	{
		return [
			'created_at',
			'updated_at',
			'start'
		];
	}

}
