<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>
<body <?php body_class($class); ?>>

  <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>
  <div class="container container--no-pad">
    <div class="col-70">
      <div class="page-section page-section--large post">

        <h1 class="post__heading">Search results</h1>

        <?php query_posts($query_string . '&cat='); ?>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <?php  include(TEMPLATEPATH . '/includes/posts/post-preview.php');  ?>
          <?php endwhile; ?>

          <?php if (function_exists( 'wp_pagenavi' )) : wp_pagenavi(); ?>
          <?php else : ?>
            <div class="alignleft"><?php next_posts_link(__ ( '&laquo; Older Entries', 'traction' )); ?></div>
            <div class="alignright"><?php previous_posts_link(__ ( 'Newer Entries &raquo;', 'traction' )); ?></div>
          <?php endif; ?>

        <?php else : ?>

          <p>Your search returned no results. Try a different search?</p>

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
