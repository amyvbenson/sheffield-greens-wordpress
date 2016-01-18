<?php /* Template Name: Home */ ?>

<?php get_header(); ?>
<?php /*?>
<!-- BEGIN SLIDER -->
<?php include(TEMPLATEPATH . '/includes/featured-slider.php'); ?>
<!-- END SLIDER --><?php */?>


<?php include(TEMPLATEPATH . '/includes/banner/homepage.php'); ?>


<div id="main-container">
  
	<div id="container">
	
    <?php include(TEMPLATEPATH . '/includes/featured.php'); ?>
        
    </div> <!-- /container -->
    
</div> <!-- /main-container -->

<?php get_footer(); ?>