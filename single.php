<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<div id="main-container">
  <div id="container">
    
   
   
   <div id="post" class="col-main">

      <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Article','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1>

      <p>
            <?php the_time(__('jS', 'default')) ?>  <?php the_time(__('F', 'default')) ?> <?php the_time(__('Y', 'default')) ?>

        </p>

       <div id="font_tools">
       Font not the right size? &nbsp; <span class="increase_font"><input type="button" value="increase" class="increaseFont" /></span> &nbsp; 
        <span class="decrease_font"><input type="button" value="decrease" class="decreaseFont"/></span></div>  
        
        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                
                
                <p class="postdata">
                    <?php _e('<em>in </em>', 'default' ); the_category(', '); ?>
                </p>
                
                <div class="article">
                    <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'sheffieldgreens' ), 'after' => '</div>' ) ); ?>
                </div><!-- .article -->
                
                
            </div><!-- #post-## -->
            
            <?php comments_template( '', true ); ?>

        <?php endwhile; // end of the loop. ?>

    </div><!-- #post -->
    
    <div id="sidebar" class="col-sidebar">
      <?php get_sidebar(); ?>
   </div><!-- #sidebar -->

</div><!-- #container -->
</div>
</div>
<?php get_footer(); ?>
</body>
</html>