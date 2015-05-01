<?php namespace Wundership\Services;

use Wundership\Commands\CreateProfile;
use Wundership\Commands\CreateSettings;
use Wundership\Commands\CreateVerifiedPhoneNumber;
use Wundership\Commands\EmailCreated;
use Wundership\User;
use Wundership\VerifiedEmail;
use Carbon\Carbon;
use Illuminate\Support\Facades\Bus;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'name'                  => 'required|alpha_num|unique:users,username',
            'first_name'            => 'required|max:255',
            'last_name'             => 'required|max:255',
            'gender'                => 'required|in:male,female,other',
            'phonefield'            => 'required|mobile_phone',
            'phonefield_country'    => 'required_with:phonefield',
			'email'                 => 'required|email|max:255|unique:verified_emails',
            'birth_date'            => 'required|date_format:d.m.Y',
			'password'              => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
        $bDaySplit = explode ('.' , $data['birth_date']);
		$user = User::create([
			'username' => $data['name'],
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
			'password' => bcrypt($data['password']),
            'birth_date' => Carbon::createFromDate($bDaySplit[2],$bDaySplit[1], $bDaySplit[0]),
            'gender' => $data['gender']
		]);
        $email = VerifiedEmail::create([
            'email' => $data['email'],
            'user_id' => $user->id
        ]);
        Bus::dispatch(new EmailCreated($email));
        Bus::dispatch(new CreateSettings($user));
        Bus::dispatch(new CreateVerifiedPhoneNumber($user, $data['phonefield'], $data['phonefield_country']));
        return $user;
	}

}
