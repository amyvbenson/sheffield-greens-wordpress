</div>

<div id="footer">

<div class="centre">

<div id="footer-menu" class="col-thirds">
	<?php wp_nav_menu( array( 'theme_location' => 'Footer' ) ); ?>
</div> <!-- /Menu -->


<div id="newsletter" class="col-thirds">

<h1>Join our mailing list</h1>

<!-- Begin MailChimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background: none; clear:left; font:14px Helvetica,Arial,sans-serif;  width:230px;}
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="//sheffieldgreenparty.us3.list-manage.com/subscribe/post?u=2f0e13e14e68429fb33a1876b&amp;id=efb674e6b3" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name </label>
	<input type="text" value="" name="FNAME" class="" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Surname </label>
	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;"><input type="text" name="b_2f0e13e14e68429fb33a1876b_efb674e6b3" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'> </script> <script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';}(jQuery));var $mcj = jQuery.noConflict(true); 
</script>

<!--End mc_embed_signup-->

</div>

<div id="copyright" class="col-thirds">
    <p>Promoted by <?php if ( get_option('green_promoted_by') <> "" ) { echo stripslashes(get_option('green_promoted_by')); } ?></p>
    <p><?php if ( get_option('green_promoted_by_address') <> "" ) { echo stripslashes(get_option('green_promoted_by_address')); } ?></p>
    <p>on behalf of Sheffield Green Party</p>
    <p>Copyright &copy; <?php if ( get_option('green_copyright_year') <> "" ) { echo stripslashes(get_option('green_copyright_year')); } ?> Sheffield Green Party</p>
    <p> All rights reserved.</p>
</div> 
<!-- /Copyright -->

</div> <!-- /Centre -->

</div> <!-- /footer -->

<?php wp_footer(); ?>

<?php if ( get_option('green_google_analytics') <> "" ) { echo stripslashes(get_option('green_google_analytics')); } ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.idTabs.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/custom.js"> </script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/fade/jquery.innerfade.js"> </script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.cycle.js"> </script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/jquery.featured_slider.js"> </script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/defaults.js"> </script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/popup.js"> </script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/slide.js"> </script>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/simpletabs.js"> </script>

	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/bjqs-1.3.js"></script>

    
    <script type="text/javascript">
    if(!window.slider) var slider={};slider.data=[
                    {"id":"slide-img-1","client":"","desc":""},
                    {"id":"slide-img-3","client":"","desc":""}];
    </script>
            
	<script>
	jQuery.noConflict()
    jQuery(document).ready(function() {
     
        var div = jQuery('#utility');
        var start = jQuery(div).offset().top;
     
        jQuery.event.add(window, "scroll", function() {
            var p = jQuery(window).scrollTop();
            jQuery(div).css('position',((p)>start) ? 'fixed' : 'static');
            jQuery(div).css('top',((p)>start) ? '0px' : '');
        });

        jQuery('[data-toggle-nav]').on('click', function () {
            jQuery(this).toggleClass('active')
            jQuery('.menu-header').toggleClass('active');
            jQuery('.search-active, [data-toggle-search]').removeClass('search-active');
        });

        jQuery('[data-toggle-search]').on('click', function () {
            jQuery(this).toggleClass('search-active');
            jQuery('.banner .search-form, #green-header').toggleClass('search-active');
            jQuery('.menu-header, [data-toggle-nav]').removeClass('active');
        });

        jQuery('#video iframe, #video object, .entry-content iframe, .entry-content object').each(function(){
            jQuery(this).wrap('<div class="video-wrapper" />')
        })
     
    });
    </script>
    
    <script type="text/javascript"> 
		jQuery.noConflict()
            jQuery(document).ready(function(){
             
                jQuery(".btn-slide").click(function(){
                    jQuery(".video_panel").slideToggle("slow");
                    jQuery(this).toggleClass("active"); return false;
                });
                
                 
            });
    </script>
    
    <script type="text/javascript"> 
	jQuery.noConflict()
    jQuery(document).ready(function(){
        
        jQuery(".accordion h3:first").addClass("active");
        jQuery(".accordion ul:not(:first)").hide();
     
        jQuery(".accordion h3").click(function(){
            jQuery(this).next(".accordion ul").slideToggle("slow")
            .siblings(".accordion ul:visible").slideUp("slow");
            jQuery(this).toggleClass("active");
            jQuery(this).siblings("h3").removeClass("active");
        });
     
    });
    </script>
    
    <script type="text/javascript"> 
	jQuery.noConflict()
    jQuery(document).ready(function(){
        
        jQuery(".videos h2:first").addClass("active");
        jQuery(".videos ul:not(:first)").hide();
     
        jQuery(".videos h2").click(function(){
            jQuery(this).next(".videos ul").slideToggle("slow")
            .siblings(".videos ul:visible").slideUp("slow");
            jQuery(this).toggleClass("active");
            jQuery(this).siblings("h2").removeClass("active");
        });
     
    });
    </script>
    
	<script type="text/javascript">
	jQuery.noConflict()
        jQuery(document).ready(function($) {
          
          $('#banner-slide').bjqs({
            animtype      : 'fade',
            height        : 400,
            width         : 970,
            responsive    : true,
            randomstart   : true
          });
          
        });
	</script>
    

	<script type="text/javascript">
	jQuery.noConflict()
		 jQuery(document).ready(function(){
		  jQuery(".increaseFont,.decreaseFont").click(function(){
		  var type=  jQuery(this).val();
		   var curFontSize = jQuery('#post').css('font-size');
		   if(type=='increase'){
			jQuery('#post').css('font-size', parseInt(curFontSize)+1);
			}
		   else{
			jQuery('#post').css('font-size', parseInt(curFontSize)-1);
		   }
		
			 });
		
		
		 });
     </script>
 
	<div id="backgroundPopup"></div>

</body>
</html>