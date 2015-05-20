<?php namespace Wundership;

use Illuminate\Database\Eloquent\Model;
use Wundership\Interfaces\Models\Mapable;

class Address extends Model {

	static $rules = [
		'title'     => 'required|string|between:3,30',
		'street'    => 'required|string|between:1,30',
		'city'      => 'required|string|between:1,30',
		'zip'       => 'required|digits:5'
	];

	protected $fillable = ['title', 'street', 'city', 'zip'];

	public function user()
	{
		return $this->belongsTo('Wundership\User');
	}
}
