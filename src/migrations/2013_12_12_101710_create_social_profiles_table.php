<?php

use Illuminate\Database\Migrations\Migration;

class CreateSocialProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('social_profiles', function($table)
		{
			$table->create();
			$table->increments('id');
			$table->integer('user_id');
			$table->enum('type_name', array('skill','work','photo','education','address','contact','family'));
			$table->integer('type_id')->nullable();
			$table->string('description');
			$table->enum('hidden', array('0','1'))->default(0);
			$table->timestamps();
			$table->softDeletes();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('social_profiles');
	}

}