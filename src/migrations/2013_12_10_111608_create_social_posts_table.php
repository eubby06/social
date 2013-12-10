<?php

use Illuminate\Database\Migrations\Migration;

class CreateSocialPostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('social_posts', function($table)
		{
			$table->create();
			$table->increments('id');
			$table->integer('user_id');
			$table->string('body');
			$table->integer('like_count');
			$table->integer('comment_count');
			$table->enum('visibility', array('public','friends','private','hidden'));
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
		Schema::drop('social_posts');
	}

}