<?php

Route::get('social/login', array(
			'as' => 'login',
			'uses' => 'Eubby\Social\Controllers\LoginController@getIndex'
			));

Route::post('social/login', array(
			'as' => 'post_login',
			'uses' => 'Eubby\Social\Controllers\LoginController@postLogin'
	));

Route::post('social/signup', array(
			'as' => 'signup',
			'uses' => 'Eubby\Social\Controllers\LoginController@postSignup'
	));

Route::group(array('prefix' => 'social', 'before' => 'social.auth'), function()
{

		Route::get('wall', array(
			'as' => 'wall',
			'uses' => 'Eubby\Social\Controllers\WallController@getIndex'
			));
});