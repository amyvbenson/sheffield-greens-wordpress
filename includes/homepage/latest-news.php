<div class="home-section">
  <h2 class="home-section__heading">Latest News</h2>

  <?php 
  $the_query = new WP_Query('cat=' . $ex_feat . '&showposts=5&orderby=post_date&order=desc');
  while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
  ?>

    <?php  include(TEMPLATEPATH . '/includes/posts/post-preview.php');  ?>

  <?php endwhile; ?>

  <a href="/news" class="home-section__more-link">
    More news
  </a>
</div>