<?php

use Illuminate\Database\Seeder;

class FacebookUsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('facebook_users')->delete();
        
		\DB::table('facebook_users')->insert(array (
			0 => 
			array (
				'id' => '802180336532686',
				'user_id' => '1',
				'friends' => '171',
				'created_at' => '2015-04-10 13:15:59',
				'updated_at' => '2015-04-10 13:16:30',
			),
			1 => 
			array (
				'id' => '958263157542010',
				'user_id' => '2',
				'friends' => '660',
				'created_at' => '2015-04-10 13:21:39',
				'updated_at' => '2015-04-10 13:23:31',
			),
			2 => 
			array (
				'id' => '1088682734482073',
				'user_id' => '3',
				'friends' => '1783',
				'created_at' => '2015-04-10 13:22:33',
				'updated_at' => '2015-04-10 13:23:29',
			),
		));
	}

}
