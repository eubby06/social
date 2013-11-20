<?php

Route::group(array('prefix' => 'social'), function()
{
		Route::get('/', array(
			'as' => 'home',
			'uses' => 'Eubby\Social\Controllers\HomeController@getIndex'
			));
});