<?php

use Illuminate\Database\Seeder;

class OAuthClientTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('oauth_clients')->delete();
        
		\DB::table('oauth_clients')->insert(array (
			0 => 
			array (
				'id' => 'DCMVX8zoZqL38AL5BTI5tQq3IXHWd1de',
				'secret' => 'NHOLknp5Or4WGOedk73tGNdlGx60ks9t',
                'name' => 'iOS Client',
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now(),
			),
            1 =>
                array (
                    'id' => '4X2UqEFlJysr3vHvhaoa3tSEvQPKf644',
                    'secret' => 'gW5MTWUW62bP2gYfaJW4RMPT0vBsNcDD',
                    'name' => 'test',
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ),
		));
	}

}
