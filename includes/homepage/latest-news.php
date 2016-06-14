<div class="page-section home-section">
  <h2 class="home-section__heading">Latest News</h2>

  <?php 
  $featuredcat = get_option('green_featured_category'); // ID of the Featured Category
  $ex_feat = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE name='$featuredcat'");
  $the_query = new WP_Query('cat=' . $ex_feat . '&showposts=5&orderby=post_date&order=desc');
  while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
  ?>

    <?php  include(TEMPLATEPATH . '/includes/posts/post-preview.php');  ?>

  <?php endwhile; ?>

  <a href="/news" class="home-section__more-link">
    More news
  </a>
</div>