<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSegmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('segments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('tour_id');
			$table->unsignedInteger('address_from');
			$table->unsignedInteger('address_to');
			$table->boolean('allow_address_delivery');
			$table->integer('address_delivery_range');
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
		Schema::drop('segments');
	}

}
