<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsignmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('consignments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('user_id');
			$table->string('code');
			$table->boolean('delivered')->default(false);
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
		Schema::drop('consignments');
	}

}
