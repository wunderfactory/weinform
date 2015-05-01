<?php namespace App\Services;


use App\User;
use App\VerifiedEmail;
use Illuminate\Support\Facades\Auth;
use Validator;

class Loginar implements LoginarContract {

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return Validator
     */
    public function validate(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|user',
            'password' => 'required',
        ]);
    }

    /**
     * Login a user instance after a valid input.
     *
     * @param  array $data
     * @return boolean
     */
    public function login(array $data)
    {
        $user = User::where('username', $data['username'])->first();
        $email = VerifiedEmail::where('email', $data['username'])->first();
        if (($user && password_verify($data['password'], $user->password) ) || ($email && password_verify($data['password'], $email->user->password))) {
            if ($user) {
                Auth::login($user, array_has($data,'remember'));
            } else {
                Auth::login($email->user, array_has($data,'remember'));
            }
            return true;
        }
        return false;
    }
}