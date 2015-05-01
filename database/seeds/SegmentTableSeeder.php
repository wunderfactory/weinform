<?php
use Illuminate\Database\Seeder;
use Wundership\Address;
use Wundership\Segment;
use Wundership\Tour;

class SegmentTableSeeder extends Seeder {

	public function run()
	{
		Segment::create([
			'tour_id'                => 1,
			'address_from'           => 1,
			'address_to'             => 2,
			'allow_address_delivery' => true,
			'address_delivery_range' => 2
		]);
		Segment::create([
			'tour_id'                => 1,
			'address_from'           => 2,
			'address_to'             => 3,
			'allow_address_delivery' => true,
			'address_delivery_range' => 2
		]);
		Segment::create([
			'tour_id'                => 1,
			'address_from'           => 3,
			'address_to'             => 4,
			'allow_address_delivery' => true,
			'address_delivery_range' => 2
		]);
		Segment::create([
			'tour_id'                => 1,
			'address_from'           => 4,
			'address_to'             => 5,
			'allow_address_delivery' => true,
			'address_delivery_range' => 2
		]);
		Segment::create([
			'tour_id'                => 1,
			'address_from'           => 5,
			'address_to'             => 6,
			'allow_address_delivery' => true,
			'address_delivery_range' => 2
		]);
	}

}