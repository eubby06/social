<?php

use Illuminate\Database\Migrations\Migration;

class CreateSocialCommentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('social_comments', function($table)
		{
			$table->create();
			$table->increments('id');
			$table->integer('user_id');
			$table->string('post_id');
			$table->text('body');
			$table->integer('like_count');
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
		Schema::drop('social_comments');
	}

}