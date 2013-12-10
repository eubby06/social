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

		Route::post('wall/post', array(
			'as' => 'social_wall_post_post',
			'uses' => 'Eubby\Social\Controllers\WallController@postPost'
			));

		Route::get('profile/{id}', array(
			'as' => 'social_profile_get_edit',
			'uses' => 'Eubby\Social\Controllers\ProfileController@getEdit'
			));

		Route::post('profile/{id}', array(
			'as' => 'social_profile_post_edit',
			'uses' => 'Eubby\Social\Controllers\ProfileController@postEdit'
			));

		Route::get('comment/create', array(
			'as' => 'social_comment_get_create',
			'uses' => 'Eubby\Social\Controllers\CommentController@getCreate'
			));

		Route::post('comment/create', array(
			'as' => 'social_comment_post_create',
			'uses' => 'Eubby\Social\Controllers\CommentController@postCreate'
			));
});