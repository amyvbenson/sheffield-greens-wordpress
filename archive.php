<?php get_header(); ?>

<div id="main-container">

		<div id="container">
        
			<div id="archive" role="main" class="col-main">
            
<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

<?php /* If this is a category archive */ if (is_category()) { ?>
<h1 class="page_h1">You are here &raquo; &#8216;<?php single_cat_title(); ?>&#8217; </h1>
<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
<h1 class="page_h1">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h1>
<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
<h1 class="page_h1">Archive for <?php the_time('F jS, Y'); ?></h1>
<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
<h1 class="page_h1">Archive for <?php the_time('F, Y'); ?></h1>
<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
<h1 class="page_h1">Archive for <?php the_time('Y'); ?></h1>
<?php /* If this is an author archive */ } elseif (is_author()) { ?>
<h1 class="page_h1">Author Archive</h1>
<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
<h1 class="page_h1">Blog Archives</h1>

<?php } ?>	


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

<div class="post_news" id="post-<?php the_ID(); ?>">

        <div id="newsentry" class="archive">
    	
		<?php $cti = catch_that_image(); if(isset($cti)){ ?>
        <a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
            <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&h=100&w=100&zc=1" alt="Link to <?php the_title(); ?>" class="alignleft"/>
        </a>
    	<?php } else {} ?>
        
		<h2 class="archive_h2"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
        </h2>
        
        <small class="meta">
        <span class="meta-alignleft">
        <?php the_time(__('jS F, Y', 'default')) ?>
        </span>
        </small>
    
    	<?php the_excerpt('strip_tags','<p>'); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:','sheffieldgreens' ), 'after' => '</div>' ) ); ?>
        
        </div><!-- #post-## -->

</div>
                
<?php endwhile; // end of the loop. ?>

			
<?php if (function_exists( 'wp_pagenavi' )) : wp_pagenavi(); ?>
		
		<?php else : ?>
			<div class="alignleft"><?php next_posts_link(__ ( '&laquo; Older Entries', 'traction' )); ?></div>
			<div class="alignright"><?php previous_posts_link(__ ( 'Newer Entries &raquo;', 'traction' )); ?></div>

<?php endif; ?>	

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