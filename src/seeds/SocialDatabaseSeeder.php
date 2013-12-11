<?php

class SocialDatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$this->call('SocialPostSeeder');
		$this->call('SocialCommentSeeder');
	}

}