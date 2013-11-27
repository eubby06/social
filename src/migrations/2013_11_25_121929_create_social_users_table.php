<?php

use Illuminate\Database\Migrations\Migration;

class CreateSocialUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('social_users', function($table)
		{
			$table->create();
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('email');
			$table->string('password');
			$table->enum('gender', array('female','male'));
			$table->date('birthdate');
			$table->string('ip_address');
			$table->enum('activated', array('0','1'))->default(0);
			$table->timestamp('activated_at');
			$table->string('activation_code');
			$table->string('persist_code');
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
		Schema::drop('social_users');
	}

}