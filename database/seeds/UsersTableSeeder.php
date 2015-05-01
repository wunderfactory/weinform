<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('users')->delete();
        
		\DB::table('users')->insert(array (
			0 => 
			array (
				'id' => '1',
				'username' => 'magnuslanganke',
				'first_name' => 'Magnus',
				'last_name' => 'Langanke',
				'password' => bcrypt('1234'),
				'birth_date' => '1994-12-20',
				'gender' => 'male',
				'remember_token' => NULL,
				'created_at' => '2015-04-10 13:16:08',
				'updated_at' => '2015-04-10 13:16:08',
			),
			1 => 
			array (
				'id' => '2',
				'username' => 'patrickhaede',
				'first_name' => 'Patrick',
				'last_name' => 'Häde',
				'password' => '$2y$10$zVvQu4fmySX.x0qhiUnBy.ZfwKzfPpFutXptDFeSm/UYTgiIeTFA.',
				'birth_date' => '1994-06-26',
				'gender' => 'male',
				'remember_token' => 'xNGmTe7QZXuwJcg282Qp9SD6wvk3SUYcxkps22G6c8xY7nMR5RW5WyMyfjqn',
				'created_at' => '2015-04-10 13:22:18',
				'updated_at' => '2015-04-10 13:51:43',
			),
			2 => 
			array (
				'id' => '3',
				'username' => 'retogericke',
				'first_name' => 'Reto',
				'last_name' => 'Gericke',
				'password' => '$2y$10$B.Ai1ZQrjcQtyu42VWLf5.xNqaKh.luEQmyo4WvWN4ogFxvtzQcUq',
				'birth_date' => '1990-11-20',
				'gender' => 'male',
				'remember_token' => NULL,
				'created_at' => '2015-04-10 13:23:11',
				'updated_at' => '2015-04-10 13:23:11',
			),
		));
	}

}
