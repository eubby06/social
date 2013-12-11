<?php

use Eubby\Social\Models\SocialCommentModel as Comment;

class SocialCommentSeeder extends Seeder
{

	public function run()
	{

		DB::table('social_comments')->delete();
		
		$comment = new Comment();
		$comment->user_id = 13;
		$comment->post_id = 1;
		$comment->body = 'this is great';
		$comment->like_count = 0;
		$comment->hidden = 0;
		$comment->created_at = date('Y-m-d H:i:s');
		$comment->updated_at = date('Y-m-d H:i:s');
		$comment->deleted_at = null;
		$comment->save();
	}
}