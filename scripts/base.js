;(function(jQuery) {
  jQuery.noConflict()
jQuery(document).ready(function(){

	// BEGIN loopedSlider
	jQuery("#loopedSlider").loopedSlider({
		autoStart: 8000, 
		slidespeed: 800,
		autoHeight: false
	});

});
})(jQuery);