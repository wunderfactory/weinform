<?php namespace App\Commands;

use App\Commands\Command;

use App\Driver;
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
	}

}
