// Place your application-specific JavaScript functions and classes here
// This file is automatically included by javascript_include_tag :defaults

window.addEvent('domready', function() 
{ 
	var myGallery = new gallery($('myGallery'), 
	{
		timed: true,
		embedLinks: false,
		showArrows: false,
		showCarousel: false,
		showInfopane: false,
		delay: 4000
	});
	
	var Scroller = new SmoothScroll({ duration:700 }, window); 
});	