"use strict";

(function($, app, window)
{
	app.Model = function()
	{
	
	};

	app.Controller = function(app, element) 
	{
		var $wrapper 		= $(element || window.document);
		var $forms 			= $wrapper.find('.-form');
		var $edit_icons		= $wrapper.find('.-edit-icon');

		var source 			= $("#profile-template").html();
		var template 		= Handlebars.compile(source);
		var context 		= {title: "My New Post", body: "This is my first post"}
		var html 			= template(context);

		$('.-profile-work').html(html);

		$forms.each(function()
		{
			$(this).hide();
		});

		$edit_icons.each(function()
		{
			$(this).click(function(e)
			{
				e.preventDefault();
				$(this).next().toggle();
			});
		});
	};


}(jQuery, window.WallApp || (window.WallApp = {}), window ));

$(function() {
	
	WallApp.Controller(new WallApp.Model(), ".-wall-wrapper");

});