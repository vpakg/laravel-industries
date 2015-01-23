<?php

class IsicLevelsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('isic_levels')->truncate();
        
		\DB::table('isic_levels')->insert(array (
			0 => 
			array (
				'id' => 1,
				'name' => 'Section',
			),
			1 => 
			array (
				'id' => 2,
				'name' => 'Division',
			),
			2 => 
			array (
				'id' => 3,
				'name' => 'Group',
			),
			3 => 
			array (
				'id' => 4,
				'name' => 'Class',
			),
		));
	}

}
