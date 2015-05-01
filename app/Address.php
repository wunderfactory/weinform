<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;
use Wundership\Interfaces\Models\Mapable;

class Address extends Model implements Mapable {

	public function country()
	{
		return $this->belongsTo('Wundership\Country');
	}

	public function segments_from()
	{
		return $this->hasMany('Wundership\Segment', 'address_from');
	}

	public function segments_to()
	{
		return $this->hasMany('Wundership\Segment', 'address_to');
	}

	public function map_latitude()
	{
		// TODO: Implement map_latitude() method.
	}

	public function map_longitude()
	{
		// TODO: Implement map_longitude() method.
	}

	public function map_address()
	{
		// TODO: Implement map_address() method.
	}

	public function map_city()
	{
		// TODO: Implement map_city() method.
	}

	public function map_zip()
	{
		// TODO: Implement map_zip() method.
	}

	public function map_country()
	{
		// TODO: Implement map_country() method.
	}

	public function map_title()
	{
		// TODO: Implement map_title() method.
	}
}
