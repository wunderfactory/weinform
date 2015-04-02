<?php namespace App\Commands;

use App\Commands\Command;

use App\Services\ProfilerContract;
use Illuminate\Contracts\Bus\SelfHandling;

class UpdateUserProfile extends Command implements SelfHandling {

    protected $profile, $data;

    /**
     * Create a new command instance.
     * @param $profile
     * @param $data
     */
	public function __construct($profile, $data)
	{
        $this->profile = $profile;
        $this->data = $data;
	}

    /**
     * Execute the command.
     *
     * @param ProfilerContract $profiler
     */
	public function handle(ProfilerContract $profiler)
	{
		$profiler->update($this->profile, $this->data);

	}

}
