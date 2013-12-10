<?php

use Eubby\Social\Models\SocialPostModel as Post;

class SocialPostSeeder extends Seeder
{

	public function run()
	{

		DB::table('users')->delete();
		
		$post = new Post();
		$post->user_id = 13;
		$post->body = 'Audition party given a great Sunday fun get together to meet and compete for the fans. Some has practice weeks ready for the competition and some just come and enjoy the fun. Asiasoft has done it again to organised yet another fun outing for the Audition fans. And Alienware Arena is proud to be the vanue partner for this fantastic event. ';
		$post->visibility = 'public';
		$post->like_count = 0;
		$post->comment_count = 0;
		$post->hidden = 0;
		$post->created_at = date('Y-m-d H:i:s');
		$post->updated_at = date('Y-m-d H:i:s');
		$post->deleted_at = null;
		$post->save();

		$post = new Post();
		$post->user_id = 13;
		$post->body = 'Audition party given a great Sunday fun get together to meet and compete for the fans. Some has practice weeks ready for the competition and some just come and enjoy the fun. Asiasoft has done it again to organised yet another fun outing for the Audition fans. And Alienware Arena is proud to be the vanue partner for this fantastic event. ';
		$post->visibility = 'public';
		$post->like_count = 0;
		$post->comment_count = 0;
		$post->hidden = 0;
		$post->created_at = date('Y-m-d H:i:s');
		$post->updated_at = date('Y-m-d H:i:s');
		$post->deleted_at = null;
		$post->save();
	}
}