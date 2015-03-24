<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class FacebookUser extends Model {



	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'facebook_users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['id', 'username', 'email', 'password'];

	public function user() {
		return $this->belongsTo('App\User');
	}

}
