<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerifiedPhoneNumbersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verified_phone_numbers', function(Blueprint $table)
		{
			$table->increments('id');
            $table->bigInteger('user_id');
            $table->string('country_prefix');
            $table->string('country', 3);
            $table->string('phone_number');
            $table->boolean('verified');
            $table->string('verify_token',64);
            $table->timestamp('verified_at');
            $table->timestamp('expires_at');
            $table->softDeletes();
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
		Schema::drop('verified_phone_numbers');
	}

}
