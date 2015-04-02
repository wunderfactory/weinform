<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Illuminate\Support\Facades\Mail;

class EmailCreated extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;

	/**
	 * Create a new command instance.
	 *
	 */

    protected $email;
	public function __construct($email)
	{
		$this->email = $email;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
        $address = $this->email->email;
        $name = $this->email->user->first_name.' '.$this->email->user->last_name;
        Mail::queue('emails.verify', ['token' => $this->email->verify_token], function($message) use($address, $name){
            $message->to($address, $name)->subject('Welcome!');
        });
	}

}
