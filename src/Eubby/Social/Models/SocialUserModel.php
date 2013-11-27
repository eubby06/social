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
}