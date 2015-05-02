<?php
use Illuminate\Database\Seeder;
use Wundership\Address;
use Wundership\Size;

class SizeTableSeeder extends Seeder {

	public function run()
	{
		Size::create([
			'name' => 'Umschlag',
			'description' => 'Ein Umschlag bis A4'
		]);
		Size::create([
			'name' => 'Päckchen',
			'description' => '...'
		]);
		Size::create([
			'name' => 'Paket',
			'description' => '...'
		]);
		Size::create([
			'name' => 'Großgerät',
			'description' => '...'
		]);
		Size::create([
			'name' => 'Möbel',
			'description' => '...'
		]);
	}

}