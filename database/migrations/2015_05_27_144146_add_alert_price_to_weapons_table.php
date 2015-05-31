<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddAlertPriceToWeaponsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('weapons', function(Blueprint $table)
		{
			$table->decimal('alert_price', 5, 2)->default(0);
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
			$table->dropColumn('alert_price');
		});
	}

}
