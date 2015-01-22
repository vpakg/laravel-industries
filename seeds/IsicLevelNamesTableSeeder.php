<?php

class IsicLevelNamesTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('isic_level_names')->truncate();
        
		\DB::table('isic_level_names')->insert(array (
			0 => 
			array (
				'id' => 1,
				'code_level' => 1,
				'level_name' => 'Section',
			),
			1 => 
			array (
				'id' => 2,
				'code_level' => 2,
				'level_name' => 'Division',
			),
			2 => 
			array (
				'id' => 3,
				'code_level' => 3,
				'level_name' => 'Group',
			),
			3 => 
			array (
				'id' => 4,
				'code_level' => 4,
				'level_name' => 'Class',
			),
		));
	}

}
