<?php

use Illuminate\Database\Seeder;

class UserProfilesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('user_profiles')->delete();
        
		\DB::table('user_profiles')->insert(array (
			0 => 
			array (
				'id' => '1',
				'user_id' => '3',
				'hometown' => 'Berlin',
				'languages' => 'Deutsch, Englisch',
				'job' => '',
				'bio' => '',
				'created_at' => '2015-04-10 13:24:23',
				'updated_at' => '2015-04-10 13:24:23',
			),
			1 => 
			array (
				'id' => '2',
				'user_id' => '2',
				'hometown' => 'Kassel',
				'languages' => 'Deutsch',
				'job' => 'Student',
				'bio' => 'Hi, ich bin ',
				'created_at' => '2015-04-10 13:24:30',
				'updated_at' => '2015-04-10 13:24:30',
			),
		));
	}

}
