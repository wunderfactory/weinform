<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model {

	static $rules = [
		'price' => 'numeric'
	];

	public function shipment()
	{
		return $this->morphOne('Wundership\Shipment', 'typeable');
	}

}
