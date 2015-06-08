<?php
use Illuminate\Database\Seeder;
use Wundership\Address;

class BeaconTableSeeder extends Seeder {

	public function run()
	{
		Address::create([
			'title'         => 'Hamburg',
			'street'        => 'Gorch-Fock-Straße 6',
			'city'          => 'Hamburg',
			'zip'           => '20357',
			'user_id'       => 2
		]);

		Address::create([
			'title'         => 'Berlin',
			'street'        => 'Prinzenallee 70',
			'city'          => 'Berlin',
			'zip'           => '13359',
			'user_id'       => 2
		]);

		Address::create([
			'title'         => 'Hamburg',
			'street'        => 'Gorch-Fock-Straße 6',
			'city'          => 'Hamburg',
			'zip'           => '20357',
			'user_id'       => 4
		]);

		Address::create([
			'title'         => 'Berlin',
			'street'        => 'Prinzenallee 70',
			'city'          => 'Berlin',
			'zip'           => '13359',
			'user_id'       => 4
		]);
	}

}