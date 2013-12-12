<?php namespace Eubby\Social\Models;

use Eubby\Social\Models as Model;

class SocialProfileModel extends Model\SocialBaseModel
{

	public $table 		= 'social_profiles';

	protected $guarded 	= array('id');

	public function user()
	{
		return $this->belongsTo('Eubby\Social\Models\SocialUserModel', 'user_id');
	}
}