<?php

if(! function_exists('social_theme_path'))
{
	function social_theme_path($file = null)
	{
	  return Config::get('eubby/social::theme.path').Config::get('eubby/social::theme.name').'/'.$file;
	}
}

if(! function_exists('social_theme_frontend'))
{
	function social_theme_frontend($file = null)
	{
	  return Config::get('eubby/social::theme.path').Config::get('eubby/social::theme.name').'/frontend/'.$file;
	}
}

if(! function_exists('social_theme_backend'))
{
	function social_theme_backend($file = null)
	{
	  return Config::get('eubby/social::theme.path').Config::get('eubby/social::theme.name').'/backend/'.$file;
	}
}

if(! function_exists('social_theme_asset'))
{
	function social_theme_asset($file = null)
	{
	  return url(Config::get('eubby/social::theme.path').Config::get('eubby/social::theme.name').'/assets/'.$file);
	}
}