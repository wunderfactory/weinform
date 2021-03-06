<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('shipments', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->integer('user_id');
			$table->integer('size_id');
			$table->integer('origin_id');
			$table->integer('destination_id')->nullable();
			$table->dateTime('collect_after')->nullable();
			$table->dateTime('collect_before')->nullable();
			$table->dateTime('deliver_after')->nullable();
			$table->dateTime('deliver_before')->nullable();
			$table->morphs('typeable');
			$table->dateTime('published_at')->nullable();
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
		Schema::drop('shipments');
	}

}
