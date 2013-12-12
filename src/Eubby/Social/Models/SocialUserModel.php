<?php namespace Eubby\Social\Models;

use Eubby\Acl\UserModel;

class SocialUserModel extends UserModel
{
	protected $table = 'social_users';
	
	protected $validation_rules = array(
	'email' 			=> 'required|email|unique:social_users', 
	'password' 			=> 'required|confirmed',
	'first_name' 		=> 'required', 
	'last_name' 		=> 'required',
	'gender' 			=> 'required',
	'birthdate' 		=> 'required');

	public function fullName()
	{
		return $this->first_name . ' ' . $this->last_name;
	}

	public function getWallIdentifier()
	{
		return implode('.', array(
								strtolower($this->first_name),
								strtolower($this->last_name)
								)
					);
	}

	public function findByWallIdentifier($identifier)
	{
		$fullname = explode('.', $identifier);
		list($firstname, $lastname) = $fullname;

		return $this->where('first_name','=',$firstname)
					->where('last_name','=',$lastname)
					->first();
	}

	public function profile()
	{
		return $this->hasOne('Eubby\Social\Models\SocialProfileModel', 'user_id');
	}

	public function posts()
	{
		return $this->hasMany('Eubby\Social\Models\SocialPostModel', 'user_id');
	}
}