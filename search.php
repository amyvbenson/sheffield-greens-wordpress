<?php get_header(); ?>

<div id="main-container">

<div id="container">
    
    <div id="post" class="col-main">

<h1 class="page_h1">Search results</h1>

<?php query_posts($query_string . '&cat='); ?>

<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>	
	
<!-- BEGIN ENTRY LAYOUT -->
<div id="post-<?php the_ID(); ?>">
    <div id="search">	         		
   				
	<?php $cti = catch_that_image(); if(isset($cti)){ ?>
        <a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
            <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&h=100&w=100&zc=1" alt="Link to <?php the_title(); ?>" class="alignleft"/>
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
                
    <?php else : ?>

		<h2>Your search returned no results. Try a different search?</h2>

	<?php endif; ?>
						

    </div> <!-- /content -->
    
    <div id="sidebar" class="col-sidebar">
    	<?php get_sidebar(); ?>
    </div> <!-- /sidebar -->
    
    </div>
    
</div> <!-- /main-container -->

<?php get_footer(); ?>