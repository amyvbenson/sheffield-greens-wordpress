<div id="footer">
    <div class="container">
        <p>Promoted by <?php if ( get_option('green_promoted_by') <> "" ) { echo stripslashes(get_option('green_promoted_by')); } ?></p>
        <p><?php if ( get_option('green_promoted_by_address') <> "" ) { echo stripslashes(get_option('green_promoted_by_address')); } ?></p>
        <p>on behalf of Sheffield Green Party</p>
        <p>Copyright &copy; <?php if ( get_option('green_copyright_year') <> "" ) { echo stripslashes(get_option('green_copyright_year')); } ?> Sheffield Green Party</p>
        <p> All rights reserved.</p>
    </div>
<!-- /Copyright -->
</div> <!-- /footer -->

<?php wp_footer(); ?>

<?php if ( get_option('green_google_analytics') <> "" ) { echo stripslashes(get_option('green_google_analytics')); } ?>
    <script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/scripts/modernizr.js"></script>

	<script>
	jQuery.noConflict()
    jQuery(document).ready(function() {

        jQuery('#video iframe, #video object, .js-post-body iframe, .js-post-body object, .entry-content iframe, .entry-content object, .article iframe, .article object').each(function(){
            jQuery(this).wrap('<div class="video-wrapper" />')
        })

        jQuery('[data-faux-link]').on('mouseenter mouseleave', function () {
            jQuery(this).parent('div').toggleClass('hover');
        })

    });
    </script>
