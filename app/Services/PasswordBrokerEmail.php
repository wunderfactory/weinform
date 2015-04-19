<?php


namespace App\Services;


use Illuminate\Auth\Passwords\PasswordBroker;

class PasswordBrokerEmail extends PasswordBroker {

    public function getUser(array $credentials)
    {
        $credentials = array_except($credentials, ['token']);
        if (array_key_exists("email", $credentials)) {
            $user = $this->users->createModal()->where('email', $credentials['email'])->first();
        } else {
            $user = $this->users->retrieveByCredentials($credentials);
        }

        if ($user && ! $user instanceof CanResetPasswordContract)
        {
            throw new UnexpectedValueException("User must implement CanResetPassword interface.");
        }

        return $user;
    }
}