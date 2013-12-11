<?php namespace Eubby\Social\Models;

use Eubby\Social\Models as Model;

class SocialCommentModel extends Model\SocialBaseModel
{

	public $table 				= 'social_comments';

	protected $guarded 			= array('id');

	protected $validation_rules = array(
	'post_id' 		=> 'required',
	'body' 			=> 'required');

	public function user()
	{
		return $this->belongsTo('Eubby\Social\Models\SocialUserModel', 'user_id');
	}

	public function post()
	{
		return $this->belongsTo('Eubby\Social\Models\SocialPostModel', 'post_id');
	}
}