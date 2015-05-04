<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model {

	public function shipment()
	{
		return $this->morphOne('Wundership\Shipment', 'typeable');
	}

}
