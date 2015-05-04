<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Immediate extends Model {

	public function shipment()
	{
		return $this->morphOne('Wundership\Shipment', 'typeable');
	}

}
