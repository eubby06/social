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
			'uses' => 'Eubby\Social\Controllers\NewsFeedController@getIndex'
			));

		Route::get('profile/{id}', array(
			'as' => 'social_profile',
			'uses' => 'Eubby\Social\Controllers\ProfileController@getIndex'
			));

		Route::get('wall/{username}', array(
			'as' => 'social_wall',
			'uses' => 'Eubby\Social\Controllers\WallController@getIndex'
			));

		Route::post('wall/post', array(
			'as' => 'social_wall_post_post',
			'uses' => 'Eubby\Social\Controllers\WallController@postPost'
			));

		Route::get('newsfeed', array(
			'as' => 'social_newsfeed',
			'uses' => 'Eubby\Social\Controllers\NewsFeedController@getIndex'
			));

		Route::post('newsfeed/post', array(
			'as' => 'social_newsfeed_post_post',
			'uses' => 'Eubby\Social\Controllers\NewsFeedController@postPost'
			));

		Route::post('profile/update/{field}', array(
			'as' => 'social_profile_post_update',
			'uses' => 'Eubby\Social\Controllers\ProfileController@postUpdate'
			));

		Route::post('comment/create', array(
			'as' => 'social_comment_post_create',
			'uses' => 'Eubby\Social\Controllers\CommentController@postCreate'
			));
});