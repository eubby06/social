<?php

Route::filter('social.auth', function()
{
	if (! Acl::check()) return Redirect::route('login');
});