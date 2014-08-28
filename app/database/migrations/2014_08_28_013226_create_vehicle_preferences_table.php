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
			$table->integer('distance_unit_id')->unsigned();
			$table->integer('volume_unit_id')->unsigned();
			$table->integer('currency_unit_id')->unsigned();
			$table->integer('price_unit_id')->unsigned();
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
