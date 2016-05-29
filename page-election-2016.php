<?php /* Template Name: Election-2016 */ ?>

<?php get_header(); ?>

<div id="main-container">

  <div id="container">

    <div id="post" class="col-main election-2016">

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php $parent = $post->ID; ?>
        
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

          <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1> 

          

          <div class="entry-content">

            <?php the_content(); ?>
            
          </div>

          <?php 
            $cat_slug = get_post_meta($post->ID, 'show-posts-from-category', true);
            if ($cat_slug) {
              echo get_category_posts(get_post_meta($post->ID, 'show-posts-from-category', true)); 
            }
          ?>

         </div><!-- #post-## -->
      <?php endwhile;  endif;// end of the loop. ?>
    </div> 
    <?php include(TEMPLATEPATH . '/includes/elections_sidebar.php'); ?>
  </div>
</div>

</div>
<?php get_footer(); ?>
</body>
</html>