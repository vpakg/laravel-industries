<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIsicLevelNamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('isic_level_names', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('code_level');
			$table->string('level_name', 45)->nullable();
			$table->primary(['id','code_level']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('isic_level_names');
	}

}
