<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;

class Size extends Model {

	public function shipments()
	{
		return $this->belongsTo('Wundership\Size');
	}

}
