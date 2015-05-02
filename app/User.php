<?php namespace Wundership;

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
	protected $fillable = ['username', 'password', 'first_name', 'last_name', 'birth_date', 'gender'];

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = ['password', 'remember_token'];
    protected $guarded = [];

	public function facebookUser()
    {
		return $this->hasOne('Wundership\FacebookUser');
	}

    public function logs()
    {
        return $this->hasMany('Wundership\Logs');
    }

    public function emails()
    {
        return $this->hasMany('Wundership\VerifiedEmail');
    }

    public function profile()
    {
        return $this->hasOne('Wundership\UserProfile');
    }

    public function settings()
    {
        return $this->hasOne('Wundership\UserSettings');
    }

    public function phoneNumbers()
    {
        return $this->hasMany('Wundership\VerifiedPhoneNumber');
    }

    public function driver()
    {
        return $this->hasOne('Wundership\Driver');
    }

    public function verification()
    {
        return $this->hasOne('Wundership\Verification');
    }

    public function getEmailForPasswordReset()
    {
        return $this->emails->first();
    }

	public function shipments()
	{
		return $this->hasMany('Wundership\Shipment');
	}

}
