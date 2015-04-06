<?php namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract {

	use Authenticatable, CanResetPassword;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = ['username', 'email', 'password', 'first_name', 'last_name', 'birth_date', 'gender'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
    protected $guarded = [];

	public function facebookUser()
    {
		return $this->hasOne('App\FacebookUser');
	}

    public function logs()
    {
        return $this->hasMany('App\Logs');
    }

    public function emails()
    {
        return $this->hasMany('App\VerifiedEmail');
    }

    public function profile()
    {
        return $this->hasOne('App\UserProfile');
    }

    public function settings()
    {
        return $this->hasOne('App\UserSettings');
    }

    public function phoneNumbers()
    {
        return $this->hasMany('App\VerifiedPhoneNumber');
    }

    public function driver()
    {
        return $this->hasOne('App\Driver');
    }
}
