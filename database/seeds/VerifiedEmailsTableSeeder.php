<?php

use Illuminate\Database\Seeder;

class VerifiedEmailsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('verified_emails')->delete();
        
		\DB::table('verified_emails')->insert(array (
			0 => 
			array (
				'id' => '1',
				'email' => '19muck94@googlemail.com',
				'user_id' => '1',
				'verified' => '1',
				'verify_token' => 'fHrHveam779ijrhOf6JHJGbvOQqmBaga86YsK9BNZqTA67Pqn3XdCwOW3tJthwcn',
				'expires_at' => '2015-04-10 14:16:08',
				'verified_at' => '0000-00-00 00:00:00',
				'deleted_at' => NULL,
				'created_at' => '2015-04-10 13:16:08',
				'updated_at' => '2015-04-10 13:16:08',
			),
			1 => 
			array (
				'id' => '2',
				'email' => 'patrickhaede@me.com',
				'user_id' => '2',
				'verified' => '1',
				'verify_token' => 'TKFX0rAJHaqWz8PaoYWX0U9bCuyWlkNVpiLaYfp1sAYZCklqQu2Fm8sN8ujN861z',
				'expires_at' => '2015-04-10 14:22:18',
				'verified_at' => '0000-00-00 00:00:00',
				'deleted_at' => NULL,
				'created_at' => '2015-04-10 13:22:18',
				'updated_at' => '2015-04-10 13:22:18',
			),
			2 =>
				array (
					'id' => '3',
					'email' => 'reto.gericke@googlemail.com',
					'user_id' => '3',
					'verified' => '1',
					'verify_token' => 'XaqJk7t6xwRokHzJorXRUwivIrKzNrMKbHejYW6MbNP8QzWTkOptHyPZuzLd1qeH',
					'expires_at' => '2015-04-10 14:23:11',
					'verified_at' => '0000-00-00 00:00:00',
					'deleted_at' => NULL,
					'created_at' => '2015-04-10 13:23:11',
					'updated_at' => '2015-04-10 13:23:11',
				),
			3 =>
				array (
					'id' => '4',
					'email' => 'moritz.ewert@wunderfactory.de',
					'user_id' => '4',
					'verified' => '1',
					'verify_token' => 'XaqJk7t6xwRokHzJorXRUwivIrKzNrMKbHejYW6MbNP8QzWTkOptHyPZuzLd1qeH',
					'expires_at' => '2015-04-10 14:23:11',
					'verified_at' => '0000-00-00 00:00:00',
					'deleted_at' => NULL,
					'created_at' => '2015-04-10 13:23:11',
					'updated_at' => '2015-04-10 13:23:11',
				),
		));
	}

}
