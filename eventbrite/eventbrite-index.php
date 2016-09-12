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

      <div class="page-section page-section--large post">

        <h1 class="post__heading">
          <?php the_title(); ?> 
        </h1>

       <?php
          // Set up and call our Eventbrite query.
          $events = new Eventbrite_Query( apply_filters( 'eventbrite_query_args', array(
          ) ) );

          if ( $events->have_posts() ) :
            while ( $events->have_posts() ) : $events->the_post(); ?>


            <div class="post-preview">

              <div class="post-preview__image">
                <?php if ( has_post_thumbnail() ) { ?>
                <?php the_post_thumbnail(array(250,180)) ?>
                <?php } else { ?>
                <?php $cti = catch_that_image(); if(isset($cti)){ ?>
                <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=180&amp;w=250&amp;q=100&amp;zc=1" alt="" />
                <?php } ?>  
                <?php } ?>  

              </div>  

              <div class="post-preview__body">        

                <h3 class="post-preview__heading">
                  <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
                    <?php the_title(); ?>              
                  </a>
                </h3>

                <div class="post-preview__text"><?php eventbrite_event_meta(); ?></div>
                
              </div>

              <a aria-hidden="true" tabindex="-1" class="faux-link" data-faux-link="true" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
            </div>



            <?php endwhile;

            // Previous/next post navigation.
            eventbrite_paging_nav( $events );

          else :
            // If no content, include the "No posts found" template.
            get_template_part( 'content', 'none' );

          endif;

          // Return $post to its rightful owner.
          wp_reset_postdata();
        ?>
        </div>
    </div>
      
    <div class="col-30">
      <?php  include(TEMPLATEPATH . '/includes/sidebar/news.php');  ?>  
    </div>

  </div>
  <?php get_footer(); ?>
</body>
</html>