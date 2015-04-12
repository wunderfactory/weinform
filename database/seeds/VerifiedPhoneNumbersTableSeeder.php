<?php

use Illuminate\Database\Seeder;

class VerifiedPhoneNumbersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('verified_phone_numbers')->delete();
        
		\DB::table('verified_phone_numbers')->insert(array (
			0 => 
			array (
				'id' => '1',
				'user_id' => '1',
				'country_prefix' => '49',
				'country' => 'DE',
				'phone_number' => '1718392168',
				'verified' => '1',
				'verify_token' => 'hlLtas',
				'verified_at' => '2015-04-10 13:28:36',
				'expires_at' => '0000-00-00 00:00:00',
				'deleted_at' => NULL,
				'created_at' => '2015-04-10 13:16:08',
				'updated_at' => '2015-04-10 13:16:08',
			),
			1 => 
			array (
				'id' => '2',
				'user_id' => '2',
				'country_prefix' => '49',
				'country' => 'DE',
				'phone_number' => '1772498468',
				'verified' => '1',
				'verify_token' => 'hlLtcQ',
				'verified_at' => '2015-04-10 13:28:36',
				'expires_at' => '2015-04-10 14:28:22',
				'deleted_at' => NULL,
				'created_at' => '2015-04-10 13:22:18',
				'updated_at' => '2015-04-10 13:28:36',
			),
			2 => 
			array (
				'id' => '3',
				'user_id' => '3',
				'country_prefix' => '49',
				'country' => 'DE',
				'phone_number' => '15256195619',
				'verified' => '1',
				'verify_token' => 'gPtUQY',
				'verified_at' => '2015-04-10 13:28:14',
				'expires_at' => '2015-04-10 14:28:00',
				'deleted_at' => NULL,
				'created_at' => '2015-04-10 13:23:11',
				'updated_at' => '2015-04-10 13:28:14',
			),
		));
	}

}
