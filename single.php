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
      <article class="page-section page-section--large post">

        <h1 class="post__heading">
          <?php the_title(); ?> 
        </h1>

        <p class="post__date">
          <?php the_time(__('jS', 'default')) ?>  <?php the_time(__('F', 'default')) ?> <?php the_time(__('Y', 'default')) ?>
          <?php edit_post_link( __( '(Edit Article)','sheffieldgreens' )); ?>
        </p>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

          <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                  
            <div class="post__body js-post-body">
              <?php the_content(); ?>
              <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'sheffieldgreens' ), 'after' => '</div>' ) ); ?>
            </div>

            <p class="post__categories">
              <?php _e('Topics: ', 'default' ); the_category(', '); ?>
            </p>
                     
          </div>
              
          <?php comments_template( '', true ); ?>

        <?php endwhile; ?>
      </article>
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