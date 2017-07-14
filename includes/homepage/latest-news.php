<div class="page-section home-section">
  <h2 class="home-section__heading">Latest News</h2>

  <?php
  global $post;
  $args = array( 'posts_per_page' => 1, 'category_name' => 'featured-sticky' );
  $stickypost = get_posts( $args );
  foreach ( $stickypost as $post ) : setup_postdata( $post ); ?>
    <?php  include(TEMPLATEPATH . '/includes/posts/post-preview.php');  ?>
  <?php endforeach;
  wp_reset_postdata();?>

  <?php
  global $post;
  $args = array( 'posts_per_page' => 5, 'category_name' => 'featured' );
  $featured_post = get_posts( $args );
  foreach ( $featured_post as $post ) : setup_postdata( $post ); ?>
    <?php  include(TEMPLATEPATH . '/includes/posts/post-preview.php');  ?>
  <?php endforeach;
  wp_reset_postdata();?>

  <a href="/news" class="home-section__more-link">
    More news
  </a>
</div>
