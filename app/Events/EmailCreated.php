<?php namespace Wundership\Events;

use Wundership\Events\Event;

use Illuminate\Queue\SerializesModels;

class EmailCreated extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//
	}

}
