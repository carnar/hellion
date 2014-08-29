<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiclePreferencesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehicle_preferences', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('vehicle_id')->unsigned();
			$table->foreign('vehicle_id')->references('id')->on('vehicles');
			$table->integer('distance_unit_id')->unsigned();
			$table->foreign('distance_unit_id')->references('id')->on('units');
			$table->integer('volume_unit_id')->unsigned();
			$table->foreign('volume_unit_id')->references('id')->on('units');
			$table->integer('currency_unit_id')->unsigned();
			$table->foreign('currency_unit_id')->references('id')->on('units');
			$table->integer('price_unit_id')->unsigned();
			$table->foreign('price_unit_id')->references('id')->on('units');
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
		Schema::drop('vehicle_preferences');
	}

}
