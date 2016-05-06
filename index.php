<?php get_header(); ?>

<div id="main-container" class="container container--no-pad">

	<div id="container">

    <?php if ( $paged < 2) { ?> 

    <?php include(TEMPLATEPATH . '/includes/featured_categories.php'); // calling Featured Slideshow ?>

    <?php } // if pages=2 ?>
    
    <div id="post" class="col-main">

      <h2>All News</h2>

      <?php query_posts($query_string . '&cat=-6684'); ?>

      <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>	

          <?php  include(TEMPLATEPATH . '/includes/posts/post-preview.php');  ?>

        <?php endwhile; ?>

      <?php if (function_exists( 'wp_pagenavi' )) : wp_pagenavi(); ?>
      <?php else : ?>
        <div class="alignleft"><?php next_posts_link(__ ( '&laquo; Older Entries', 'traction' )); ?></div>
        <div class="alignright"><?php previous_posts_link(__ ( 'Newer Entries &raquo;', 'traction' )); ?></div>
      <?php endif; ?>
    <?php endif; ?>							

  </div> <!-- /content -->

  <div id="sidebar" class="col-sidebar">
   <?php get_sidebar(); ?>
 </div> <!-- /sidebar -->

</div> <!-- /container -->

</div> <!-- /main-container -->

</div>
<?php get_footer(); ?>
</body>
</html>