<?php namespace Wundership\Commands;

use Wundership\File;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Support\Facades\Storage;

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
        $newFile = File::create([
            'name'          => 'profile_picture_'.$this->owner->username,
            'extension'     => 'jpg',
            'stored_name'   => str_random(64).'.jpg',
            'path'          => 'profile_pictures',
        ]);
        $newFile->owner()->associate($this->owner->profile);
        $newFile->save();
        Storage::put($newFile->path.'/'.$newFile->stored_name, base64_decode(str_replace(' ', '+', $this->picture)));
        return $newFile;
	}

}
