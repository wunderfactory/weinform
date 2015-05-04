<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Immediate extends Model {

	static $rules = [
		'price' => ['required', 'numeric']
	];

	protected $fillable = [
		'price'
	];

	public function shipment()
	{
		return $this->morphOne('Wundership\Shipment', 'typeable');
	}

}
