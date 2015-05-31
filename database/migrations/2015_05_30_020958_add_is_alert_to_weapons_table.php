<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddIsAlertToWeaponsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('weapons', function(Blueprint $table)
		{
			$table->boolean('is_alert_price_active')->default(false);
			$table->boolean('is_alert_percentage_active')->default(false);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('weapons', function(Blueprint $table)
		{
			$table->dropColumn('is_alert_percentage_active');
			$table->dropColumn('is_alert_price_active');
		});
	}

}
