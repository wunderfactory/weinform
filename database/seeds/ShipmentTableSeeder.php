<?php
use Illuminate\Database\Seeder;
use Wundership\Address;

class ShipmentTableSeeder extends Seeder {

	public function run()
	{
	\DB::table('shipments')->delete();
    
	\DB::table('shipments')->insert(array (
		0 => 
		array (
			'id'			=> '1',
			'title'         => 'Stuhl',
			'user_id'       => '2',
			'size_id'       => '2',
			'origin_id'		=> '8',
			'destination_id'=> '9',
			'collect_after'=>'2015-06-09 03:00:00',
			'collect_before'=>'2015-06-09 06:00:00',
			'deliver_after'=>'2015-06-10 05:00:00',
			'deliver_before'=>'2015-06-10 08:00:00',
			'typeable_id'=>'1',
			'typeable_type'=>'Wundership\Immediate',
			'published_at'=>'127'
		),
	
		));
	}

}