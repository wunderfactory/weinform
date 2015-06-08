<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();
        //Seed the countries
        $this->call('CountriesSeeder');

		$this->call('UsersTableSeeder');
		$this->call('FacebookUsersTableSeeder');
		$this->call('LogsTableSeeder');
		$this->call('UserProfilesTableSeeder');
		$this->call('UserSettingsTableSeeder');
		$this->call('VerifiedEmailsTableSeeder');
		$this->call('VerifiedPhoneNumbersTableSeeder');
        $this->call('OAuthClientTableSeeder');

		$this->call('BeaconTableSeeder');
		$this->call('AuctionTableSeeder');
		$this->call('ImmediateTableSeeder');
		$this->call('SizeTableSeeder');
		$this->call('SpecTableSeeder');
		$this->call('ShipmentTableSeeder');

		$this->call('QuestionTableSeeder');
        $this->call('KeywordTableSeeder');
        $this->call('CategoryTableSeeder');

	}

}
