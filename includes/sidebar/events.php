<div class="sidebar-list page-section">
  <h2 class="sidebar-list__heading">More events</h2>
  <ul class="sidebar-list__list">

  <?php
    $events = new Eventbrite_Query( apply_filters( 'eventbrite_query_args', array(
       'limit' => 5,            // integer
      ) ) );

    if ( $events->have_posts() ) :
      while ( $events->have_posts() ) : $events->the_post(); ?>

      <li class="sidebar-list__list-item">
        <a class="sidebar-list__list-link" href="<?php the_permalink() ?>">
          <?php the_title(); ?> - 
          <?php the_date(); ?>
        </a>
      </li>

      <?php endwhile;
    endif;

    wp_reset_postdata();
  ?>
</ul>

  <p class="sidebar-list__view-all">
    <a href="/events">View all events</a>
  </p>
</div>