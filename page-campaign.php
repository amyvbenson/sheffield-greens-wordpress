<?php /* Template Name: Air Quality Campaign */ ?>

<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>

<body <?php body_class($class); ?>>

  <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>

  <div class="container container--no-pad">
        
      <article class="page-section page-section--large post">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="campaign__heading">
          <h1 >
                <?php the_title(); ?> 
              </h1>
        </div>
        <div class="col-70">
          
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              
       
              <div class="post__body">

                <?php if (has_block( 'ctas' )) { ?>
                  <div class="campaign__ctas">
                    <?php the_block('ctas'); ?>
                  </div>
                <?php } ?>

                <?php if (has_block( 'video' )) { ?>
                  <div id="video" class="campaign__video">
                    <?php the_block('video'); ?>
                  </div>
                <?php } ?>

                

                <?php if (has_block( 'key-points' )) { ?>
                  <div class="campaign__key-points">
                    <?php the_block('key-points'); ?>
                  </div>
                <?php } ?>

                <?php the_content(); ?>
               
              </div>
                     
        </div>
        </div>
        <div class="col-30">
          <a href="http://www.change.org/p/sheffield-city-council-sheffield-needs-a-new-air-pollution-action-plan" class="campaign__sidebar-cta">
            <span>Sign the petition</span>
          </a>
          <div class="campaign__related">
            <?php echo get_category_posts('air-pollution');?>
          </div>

      </div>
      <?php endwhile; ?>
      </article>
      
      
    </div>
  
  </div>
  <?php get_footer(); ?>
</body>
</html>
