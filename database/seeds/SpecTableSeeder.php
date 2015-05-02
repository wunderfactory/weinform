<?php
use Illuminate\Database\Seeder;
use Wundership\Spec;

class SpecTableSeeder extends Seeder {

	public function run()
	{
		Spec::create([
			'name' => 'Verderblich',
			'description' => '...'
		]);
		Spec::create([
			'name' => 'Sperrig',
			'description' => '...'
		]);
		Spec::create([
			'name' => 'Lebendig',
			'description' => '...'
		]);
	}

}