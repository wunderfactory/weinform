<?php namespace Wundership\Commands;

use Wundership\Commands\Command;

use Wundership\Driver;
use Illuminate\Contracts\Bus\SelfHandling;

class CreateDriver extends Command implements SelfHandling {

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
        $driver = new Driver();
		$driver->user()->associate($this->user);
        $driver->save();
        return $driver;
	}

}
