<div class="sidebar-list page-section">
  <h2 class="sidebar-list__heading">Latest news</h2>
  <ul class="sidebar-list__list">
  <?php 
  $featuredcat = get_option('green_featured_category'); // ID of the Featured Category
  $ex_feat = $wpdb->get_var("SELECT term_id FROM $wpdb->terms WHERE name='$featuredcat'");
  $the_query = new WP_Query('cat=' . $ex_feat . '&showposts=5&orderby=post_date&order=desc');
  while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
  ?>

     <li class="sidebar-list__list-item">
        <a class="sidebar-list__list-link" href="<?php the_permalink() ?>">
          <?php the_title(); ?>
        </a>
      </li>

  <?php endwhile; ?>
  </ul>
  <p class="sidebar-list__view-all">
    <a href="/news">
      More news
    </a>
  </p>
</div>