<?php

use Illuminate\Database\Seeder;

class UserSettingsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('user_settings')->delete();
        
		\DB::table('user_settings')->insert(array (
			0 => 
			array (
				'id' => '1',
				'user_id' => '1',
				'hidden_hometown' => '1',
				'hidden_job' => '1',
				'hidden_bio' => '1',
				'hidden_languages' => '1',
				'created_at' => '2015-04-10 13:16:08',
				'updated_at' => '2015-04-10 13:16:08',
			),
			1 => 
			array (
				'id' => '2',
				'user_id' => '2',
				'hidden_hometown' => '1',
				'hidden_job' => '1',
				'hidden_bio' => '1',
				'hidden_languages' => '1',
				'created_at' => '2015-04-10 13:22:18',
				'updated_at' => '2015-04-10 13:22:18',
			),
			2 => 
			array (
				'id' => '3',
				'user_id' => '3',
				'hidden_hometown' => '1',
				'hidden_job' => '1',
				'hidden_bio' => '1',
				'hidden_languages' => '1',
				'created_at' => '2015-04-10 13:23:11',
				'updated_at' => '2015-04-10 13:23:11',
			),
		));
	}

}
