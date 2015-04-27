<?php
use Illuminate\Database\Seeder;
use Wundership\Address;
use Wundership\Tour;

class TourTableSeeder extends Seeder {

	public function run()
	{
		Tour::create([
			'user_id' => 1,
			'is_published' => true,
			'address_from' => 1,
			'address_to' => 6,
			'km_price' => 0.07,
			'start' => '2015-04-21 11:45:00'
		]);
	}

}