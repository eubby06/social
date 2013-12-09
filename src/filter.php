<?php

Route::filter('social.auth', function()
{
	if (! Acl::check()) return Redirect::route('social_login');
});