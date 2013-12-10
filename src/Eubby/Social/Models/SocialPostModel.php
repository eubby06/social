<?php namespace Eubby\Social\Models;

use Eubby\Social\Models as Model;

class SocialPostModel extends Model\SocialBaseModel
{

	public $table 				= 'social_posts';

	protected $guarded 			= array('id');

	protected $validation_rules = array(
	'visibility' 		=> 'required',
	'body' 				=> 'required');

	public function user()
	{
		return $this->belongsTo('Eubby\Social\Models\SocialUserModel', 'user_id');
	}
}