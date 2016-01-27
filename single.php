<?php
/**
 * The Template for displaying all single posts.
 */

get_header(); ?>

<div id="main-container">
  <div id="container">
    
    <div id="featured_image"> 

        <p class="postdate">
            <?php the_time(__('jS', 'default')) ?> &frasl; <?php the_time(__('F', 'default')) ?> &frasl; <?php the_time(__('Y', 'default')) ?>

        </p><!-- .postdate -->
        
        
        <?php if (has_post_thumbnail( $post->ID )): ?>
            <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' ); ?>
            <img class="featured_header" src="<?php echo get_stylesheet_directory_uri(); ?>/thumb.php?src=<?php echo $image[0]; ?>&w=970&h=400&zc=1" />
            
        <?php else :?>
         
           <?php	echo '<img class="featured_header" src="' . get_bloginfo( 'stylesheet_directory' ) . '/thumb.php?src=' . get_bloginfo( 'stylesheet_directory' ) . '/images/greenbanner.jpg&amp;h=400&amp;w=970&amp;q=100&amp;zc=1" alt="featured image" title="featured image" />'; ?>
           
       <?php endif; ?>   
       
       <h1 class="article_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Article','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1>
       
   </div>
   
   <div id="post" class="col-main">

       <div id="font_tools">Font not the right size? &nbsp; <span class="increase_font"><input type="button" value="increase" class="increaseFont"></input></span> &nbsp; 
        <span class="decrease_font"><input type="button" value="decrease" class="decreaseFont"></input></span></div>  
        
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

<?php get_footer(); ?>
