<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacebookUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('facebook_users', function(Blueprint $table)
		{
			$table->unsignedBigInteger('id')->index();
			$table->unsignedBigInteger('user_id')->references('id')->on('users');;
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('facebook_users');
	}

}
