<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVerifiedEmailsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('verified_emails', function(Blueprint $table)
		{
            $table->string('email')->index();
            $table->unsignedBigInteger('user_id');
            $table->boolean('verified')->default(false);
            $table->string('verify_token', 64);
            $table->timestamp('verify_at');
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
		Schema::drop('verified_emails');
	}

}
