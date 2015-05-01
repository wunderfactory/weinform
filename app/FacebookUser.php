<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FacebookUser extends Model {
    use SoftDeletes;



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
	protected $fillable = ['id', 'user_id'];
    protected $guarded = [];

	public function user() {
		return $this->belongsTo('App\User');
	}

}
