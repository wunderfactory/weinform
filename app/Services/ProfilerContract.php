<?php namespace App\Services;
 interface ProfilerContract {
     /**
      * Get a validator for an incoming registration request.
      *
      * @param  array  $data
      * @return boolean
      */
     public function validate(array $data);

     /**
      * Updates a user profile
      *
      * @param $profile
      * @param  array $data
      * @return User
      */
     public function update($profile, array $data);
 }