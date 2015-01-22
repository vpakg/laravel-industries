<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIsicStructureTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('isic_structure', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('sort_order');
			$table->string('code', 45);
			$table->string('code_level', 45);
			$table->string('level_1', 45)->nullable();
			$table->string('level_2', 45)->nullable();
			$table->string('level_3', 45)->nullable();
			$table->string('level_4', 45)->nullable();
			$table->string('level_5', 45)->nullable();
			$table->string('level_6', 45)->nullable();
			$table->primary(['id','sort_order']);
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
		Schema::drop('isic_structure');
	}

}
