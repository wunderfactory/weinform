<?php
use Illuminate\Database\Seeder;
use Wundership\Address;

class BeaconTableSeeder extends Seeder {

	public function run()
	{
		Address::create([
			'title'         => 'Bahnhof Wilhelmshöhe',
			'address'       => 'Grüner Waldweg 57',
			'city'          => 'Kassel',
			'zip'           => '34121',
			'country_id'    => 276,
			'is_beacon'     => true
		]);

		Address::create([
			'title'         => 'OBI Parkplatz',
			'address'       => 'Elstalgraben',
			'city'          => 'Göttingen',
			'zip'           => '37079',
			'country_id'    => 276,
			'is_beacon'     => true
		]);

		Address::create([
			'title'         => 'Raststätte',
			'address'       => 'Asseburgstraße 11',
			'city'          => 'Hannover',
			'zip'           => '30451',
			'country_id'    => 276,
			'is_beacon'     => true
		]);

		Address::create([
			'title'         => 'Hauptbahnhof Bremen',
			'address'       => 'Bahnhofsplatz 18',
			'city'          => 'Bremen',
			'zip'           => '28195',
			'country_id'    => 276,
			'is_beacon'     => true
		]);

		Address::create([
			'title'         => 'Jungfernstieg',
			'address'       => 'Reesendamm 3',
			'city'          => 'Hamburg',
			'zip'           => '20095',
			'country_id'    => 276,
			'is_beacon'     => true
		]);

		Address::create([
			'title'         => 'Autobahnraststätte Fürholzen',
			'address'       => 'Fürholzen',
			'city'          => 'Fürholzen',
			'zip'           => '85376',
			'country_id'    => 276,
			'is_beacon'     => true
		]);

		Address::create([
			'title'         => 'Raststätte Taunusblick Eschborn',
			'address'       => 'A5',
			'city'          => 'Eschborn',
			'zip'           => '65760',
			'country_id'    => 276,
			'is_beacon'     => true
		]);
	}

}