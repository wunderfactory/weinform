<?php namespace App\Commands;

use App\Commands\Command;

use App\File;
use Illuminate\Contracts\Bus\SelfHandling;

class CreateProfilePicture extends Command implements SelfHandling {

    protected $picture;

    protected $owner;

    /**
     * Create a new command instance.
     *
     * @param $picture
     * @param $owner
     */
	public function __construct($picture, $owner)
	{
		//
        $this->picture = $picture;
        $this->owner = $owner;
	}

	/**
	 * Execute the command.
	 *
	 */
	public function handle()
	{
		return File::file($this->picture, $this->owner);
	}

}
