<?php namespace Wundership\Commands;

use Wundership\Commands\Command;

use Wundership\UserSettings;
use Illuminate\Contracts\Bus\SelfHandling;

class CreateSettings extends Command implements SelfHandling {

    protected $user;

    /**
     * Create a new command instance.
     *
     * @param $user
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
		$settings = new UserSettings();
        $settings->user()->associate($this->user);
        $settings->save();
        return $settings;
	}

}
