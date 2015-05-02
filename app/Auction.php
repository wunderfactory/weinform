<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model {

	public function shipments()
	{
		return $this->morphOne('Wundership\Shipment', 'typeable');
	}

}
