<?php get_header(); ?>

<div id="main-container">

	<div id="container">
    
    <?php if ( $paged < 2) { ?> 

	<?php include(TEMPLATEPATH . '/includes/featured_categories.php'); // calling Featured Slideshow ?>
 
	<?php } // if pages=2 ?>
    
    <div id="post">

<?php query_posts($query_string . '&cat=-6684'); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>	
	
<!-- BEGIN ENTRY LAYOUT -->
<div class="post_news" id="post-<?php the_ID(); ?>">
    <div class="newsentry">	         		
   				
	<?php $cti = catch_that_image(); if(isset($cti)){ ?>
        <a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
            <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=100&amp;w=100&amp;zc=1" alt="Link to <?php the_title(); ?>" class="alignleft"/>
        </a>
    <?php } else {} ?>
    
     <h2>
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
    </h2> 
             
    <small class="meta">
    <span class="meta-alignleft">
    <?php the_time(__('jS F, Y', 'default')) ?>
    </span>
    </small>  
          
	<?php the_excerpt('strip_tags','<p>'); ?>

    </div>
    
</div>
<!-- END ENRTY LAYOUT -->

	<?php endwhile; ?>
	
			<?php if (function_exists( 'wp_pagenavi' )) : wp_pagenavi(); ?>
				<?php else : ?>
                    <div class="alignleft"><?php next_posts_link(__ ( '&laquo; Older Entries', 'traction' )); ?></div>
                    <div class="alignright"><?php previous_posts_link(__ ( 'Newer Entries &raquo;', 'traction' )); ?></div>
            <?php endif; ?>
    <?php endif; ?>							

    </div> <!-- /content -->
    
    <div id="sidebar">
    	<?php get_sidebar(); ?>
    </div> <!-- /sidebar -->
    
    </div> <!-- /container -->
    
</div> <!-- /main-container -->

<?php get_footer(); ?>