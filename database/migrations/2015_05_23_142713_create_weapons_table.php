<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeaponsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('weapons', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name',500);
			$table->string('link',2048);
			$table->string('img_link',2048);
			$table->boolean('is_monitored')->default(True);
			$table->decimal('last_price', 5, 2)->default(0);
			$table->integer('group_id');
			$table->decimal('avg_price', 5, 2)->default(0);
			$table->timestamps();
			$table->index('link');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('weapons');
	}

}
