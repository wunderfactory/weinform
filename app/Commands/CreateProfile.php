<?php namespace Wundership\Commands;

use Wundership\Commands\Command;

use Wundership\UserProfile;
use Illuminate\Contracts\Bus\SelfHandling;

class CreateProfile extends Command implements SelfHandling {

    protected $user;
	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct($user)
	{
		$this->user = $user;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		return UserProfile::create(['user_id' => $this->user->id]);
	}

}
