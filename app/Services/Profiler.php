<?php namespace Wundership\Services;


use Illuminate\Support\Facades\Validator;

class Profiler implements ProfilerContract{

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return boolean
     */
    public function validate(array $data)
    {
        return Validator::make($data,[
            'hometown' => 'max:255',
            'job' => 'max:255',
            'bio' => 'max:255',
            'languages' => 'max:255',
        ]);
    }

    /**
     * Updates a user profile
     *
     * @param $profile
     * @param  array $data
     * @return User
     */
    public function update($profile, array $data)
    {
        $profile->fill($data)->save();
    }
}