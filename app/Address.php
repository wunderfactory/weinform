<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;
use Wundership\Interfaces\Models\Mapable;

class Address extends Model {

	public function user()
	{
		return $this->belongsTo('Wundership\User');
	}
}
