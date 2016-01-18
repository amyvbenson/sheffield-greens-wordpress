;(function(jQuery) {
  jQuery.noConflict()
jQuery(document).ready(function(){
	
	// Initialize colorbox
	// jQuery(".colorbox").colorbox({maxWidth: "90%", maxHeight: "90%", opacity:.6});
	// jQuery(".ext").colorbox({iframe:true, innerWidth:"90%", innerHeight:"90%", opacity:.6});

	// Slider Toggle (an anchor tag with class '.toggle' will expand it's href target)
	jQuery('.hideme').hide();
	jQuery('.toggle').bind('click', function() {
		var maketoggle = jQuery(this).attr('href');
		jQuery(maketoggle).slideToggle(300);
		return false;
	});
	
	/* How to reference jquery.innerfade.js
	jQuery('#element').innerfade({
		speed: 'slow', 
        timeout: 4000, 
        type: 'sequence', 
        containerheight: '350px'
	})
	*/
	
	// Fill input boxes with their title="" value (via jquery.hint.js)
	// jQuery('input[title!=""]').hint();
	// jQuery('input#s').hint();
	
	
	// Dynamically replace default "Your Name" and generic gravatar in comment form w/ user's information
	// jQuery('#form-author').text(jQuery('#author').val());
	// jQuery("#author").change(function() {
    //    jQuery('#form-author').text(jQuery('#author').val());
    // });
    

	// Dynamically grabbing gravatar path ... failed attempt
	// var pathname = window.location.pathname;
	// var grav = jQuery('.gravatar').attr("src")
	// jQuery('#location').attr("title",grav);
	
	// var gravatar_default = "http%3A%2F%2Fafricanleadership.info%2Fwp-content%2Fthemes%2FYO01%2Fimages%2Fgravatar.jpg";
	// var gravatar_size = 80;
	// jQuery('.formcontainer .gravatar').attr("src","http://www.gravatar.com/avatar/"+jQuery.md5(jQuery('#email').val())+"?s="+gravatar_size+"&default="+gravatar_default);
	// jQuery("#email").change(function() {
	// 		jQuery('.formcontainer .gravatar').attr("src","http://www.gravatar.com/avatar/"+jQuery.md5(jQuery('#email').val())+"?s="+gravatar_size+"&default="+gravatar_default);
    // });

});
})(jQuery);