<?php /* Template Name: Home */ ?>

<?php get_header(); ?>


<?php include(TEMPLATEPATH . '/includes/banner/homepage-election.php'); ?>
<?php
 // include(TEMPLATEPATH . '/includes/banner/homepage.php'); ?>


<div id="main-container">
  
	<div id="container">
	
    <?php include(TEMPLATEPATH . '/includes/featured.php'); ?>
        
    </div> <!-- /container -->
    
</div> <!-- /main-container -->

<?php get_footer(); ?>