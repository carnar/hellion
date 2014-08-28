<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFillupsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('fillups', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('odometer');
			$table->float('price');
			$table->float('fuel');
			$table->float('total');
			$table->datetime('date');
			$table->integer('vehicle_id')->unsigned();
			$table->foreign('vehicle_id')->references('id')->on('vehicles');
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
		Schema::drop('fillups');
	}

}
