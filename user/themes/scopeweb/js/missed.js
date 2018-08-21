$(function() {
	// Get page title
  	var pageTitle = $("title").text();
 
	// Change page title on blur
	$(window).blur(function() {
	  $("title").text("Hey, you forgot something");
	});

	// Change page title back on focus
	$(window).focus(function() {
	  $("title").text(pageTitle);
	});
});