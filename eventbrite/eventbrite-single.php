<?php
/**
 * The Template for displaying all single posts.
 */
?>
<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>

<body <?php body_class($class); ?>>

  <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>

  <div class="container container--no-pad">
       
    <div class="col-70">
      <?php
          // Get our event based on the ID passed by query variable.
          $event = new Eventbrite_Query( array( 'p' => get_query_var( 'eventbrite_id' ) ) );

          if ( $event->have_posts() ) :
            while ( $event->have_posts() ) : $event->the_post(); ?>

              <article class="page-section page-section--large post" id="event-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">

                  <h1 class="post__heading"><?php the_title(); ?></h1>

                  <div class="post__date">
                    <?php eventbrite_event_meta(); ?>
                  </div><!-- .entry-meta -->
                </header><!-- .entry-header -->

                <div class="entry-content">
                  <?php the_content(); ?>
                  <?php eventbrite_ticket_form_widget(); ?>
                </div><!-- .entry-content -->

                
              </article><!-- #post-## -->

            <?php endwhile;

          else :
            // If no content, include the "No posts found" template.
            get_template_part( 'content', 'none' );

          endif;

          // Return $post to its rightful owner.
          wp_reset_postdata();
        ?>
    </div>
      
    <div class="col-30">
      <?php  include(TEMPLATEPATH . '/includes/sidebar/events.php');  ?>
    </div>

  </div>
  <?php get_footer(); ?>
</body>
</html>