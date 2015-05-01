<?php namespace Wundership\Services;
 interface LoginarContract {
     /**
      * Get a validator for an incoming registration request.
      *
      * @param  array  $data
      * @return boolean
      */
     public function validate(array $data);

     /**
      * Login a user instance after a valid input.
      *
      * @param  array  $data
      * @return User
      */
     public function login(array $data);
 }