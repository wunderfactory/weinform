<?php
use Illuminate\Database\Seeder;
use Wundership\Address;

class BeaconTableSeeder extends Seeder {

	public function run()
	{
		Address::create([
			'title'         => 'Bahnhof Wilhelmshöhe',
			'street'        => 'Grüner Waldweg 57',
			'city'          => 'Kassel',
			'zip'           => '34121',
			'user_id'       => 4
		]);

		Address::create([
			'title'         => 'OBI Parkplatz',
			'street'        => 'Elstalgraben',
			'city'          => 'Göttingen',
			'zip'           => '37079',
			'user_id'       => 4
		]);

		Address::create([
			'title'         => 'Raststätte',
			'street'        => 'Asseburgstraße 11',
			'city'          => 'Hannover',
			'zip'           => '30451',
			'user_id'       => 4
		]);

		Address::create([
			'title'         => 'Hauptbahnhof Bremen',
			'street'        => 'Bahnhofsplatz 18',
			'city'          => 'Bremen',
			'zip'           => '28195',
			'user_id'       => 4
		]);

		Address::create([
			'title'         => 'Jungfernstieg',
			'street'        => 'Reesendamm 3',
			'city'          => 'Hamburg',
			'zip'           => '20095',
			'user_id'       => 4
		]);

		Address::create([
			'title'         => 'Autobahnraststätte Fürholzen',
			'street'        => 'Fürholzen',
			'city'          => 'Fürholzen',
			'zip'           => '85376',
			'user_id'       => 4
		]);

		Address::create([
			'title'         => 'Raststätte Taunusblick Eschborn',
			'street'        => 'A5',
			'city'          => 'Eschborn',
			'zip'           => '65760',
			'user_id'       => 4
		]);
	}

}