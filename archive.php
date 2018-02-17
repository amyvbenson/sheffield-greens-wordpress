<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>
<body <?php body_class($class); ?>>

  <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>
  <div class="container container--no-pad">
    <div class="col-70">
      <div class="page-section page-section--large post">

        <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

        <?php /* If this is a category archive */ if (is_category()) { ?>
        <h1 class="post__heading">You are here &raquo; &#8216;<?php single_cat_title(); ?>&#8217; </h1>
        <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
        <h1 class="post__heading">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
        <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
        <h1 class="post__heading">Archive for <?php the_time('F jS, Y'); ?></h1>
        <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
        <h1 class="post__heading">Archive for <?php the_time('F, Y'); ?></h1>
        <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
        <h1 class="post__heading">Archive for <?php the_time('Y'); ?></h1>
        <?php /* If this is an author archive */ } elseif (is_author()) { ?>
        <h1 class="post__heading">Author Archive</h1>
        <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
        <h1 class="post__heading">Blog Archives</h1>

        <?php } ?>


        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
          <?php  include(TEMPLATEPATH . '/includes/posts/post-preview.php');  ?>
        <?php endwhile; // end of the loop. ?>


        <?php if (function_exists( 'wp_pagenavi' )) : wp_pagenavi(); ?>

        <?php else : ?>
         <div class="alignleft"><?php next_posts_link(__ ( '&laquo; Older Entries', 'traction' )); ?></div>
         <div class="alignright"><?php previous_posts_link(__ ( 'Newer Entries &raquo;', 'traction' )); ?></div>

       <?php endif; ?>

     </div>
    </div>
    <div class="col-30">
      <div class="page-section post-sidebar">
        <?php get_sidebar(); ?>
      </div>
    </div>
  </div>

  <?php get_footer(); ?>
</body>
</html>
