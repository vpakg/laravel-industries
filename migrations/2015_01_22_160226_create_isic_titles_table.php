<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIsicTitlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('isic_titles', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('sort_order');
			$table->string('code', 45)->nullable();
			$table->text('description')->nullable();
			$table->string('explanatory_note_inclusion', 500)->nullable();
			$table->string('explanatory_note_exclusion', 500)->nullable();
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
		Schema::drop('isic_titles');
	}

}
