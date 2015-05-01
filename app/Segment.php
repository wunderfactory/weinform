<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Segment extends Model {

	public function tour()
	{
		return $this->belongsTo('Wundership\Tour');
	}

	public function from()
	{
		return $this->belongsTo('Wundership\Address', 'address_from');
	}

	public function to()
	{
		return $this->belongsTo('Wundership\Address', 'address_to');
	}

}
