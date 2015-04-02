<?php namespace App\Commands;

use App\Commands\Command;

use App\Services\ProfilerContract;
use App\UserProfile;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Bus;

class CreateUserProfile extends Command implements SelfHandling {

    protected  $user, $data;

    /**
     * Create a new command instance.
     *
     * @param $user
     * @param $data
     */
	public function __construct($user, $data)
	{
        $this->data = $data;
        $this->user = $user;

	}

    /**
     * Execute the command.
     *
     * @param ProfilerContract $profiler
     */
	public function handle(ProfilerContract $profiler)
	{
        $profile = UserProfile::create(['user_id'=> $this->user->id]);
        Bus::dispatch(new UpdateUserProfile($profile, $this->data));
	}

}
