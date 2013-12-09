<?php

Route::get('social/login', array(
			'as' => 'social_login',
			'uses' => 'Eubby\Social\Controllers\LoginController@getIndex'
			));

Route::post('social/login', array(
			'as' => 'social_post_login',
			'uses' => 'Eubby\Social\Controllers\LoginController@postLogin'
	));

Route::post('social/signup', array(
			'as' => 'social_signup',
			'uses' => 'Eubby\Social\Controllers\LoginController@postSignup'
	));

Route::get('social/logout', array(
			'as' => 'social_logout',
			'uses' => 'Eubby\Social\Controllers\LoginController@getLogout'
			));

Route::group(array('prefix' => 'social', 'before' => 'social.auth'), function()
{
		Route::get('/', array(
			'as' => 'social_home',
			'uses' => 'Eubby\Social\Controllers\WallController@getIndex'
			));

		Route::get('wall', array(
			'as' => 'social_wall',
			'uses' => 'Eubby\Social\Controllers\WallController@getIndex'
			));
});