<?php get_header(); ?>

<div id="main-container">

<?php if ( is_page(array('area')) ) { ?><!-- Main conditional tag -->

  <?php include(TEMPLATEPATH . '/includes/areas.php'); ?>

    
    
<?php } elseif (is_page(array('Amazon'))) { ?>

    <div id="widecolumn">
    
    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            
                 <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1> 
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:','sheffieldgreens' ), 'after' => '</div>' ) ); ?>
                </div><!-- .article -->
            
            </div><!-- #post-## -->
                    
    <?php endwhile; // end of the loop. ?>
    
            </div>
            
<?php } elseif (is_page(array('Calendar'))) { ?>

    <?php include(TEMPLATEPATH . '/includes/calendar-page.php'); ?>
    
    
<?php } elseif (is_page(array('Elections'))) { ?>
<div id="container">
  <?php include(TEMPLATEPATH . '/includes/next_election.php'); ?>
  <?php include(TEMPLATEPATH . '/includes/elections_main.php'); ?>
  <?php include(TEMPLATEPATH . '/includes/elections_sidebar.php'); ?>
</div>    

<?php } elseif (is_page()) { ?>

    <div id="container">
    
        <div id="post" class="col-main">
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
        <?php $parent = $post->ID; ?>
        
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
        <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1> 
        
            <div class="entry-content">
            
      			<?php the_content(); ?>
            <?php $parent_slug = the_parent_slug(); 
              if (show_related_posts()) {
                echo get_related_posts();;
              }
            ?>   
            
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:','sheffieldgreens' ), 'after' => '</div>' ) ); ?>
          
			<?php if ( is_page(  array('People','Affinity Schemes','results') ) ) { ?>
      
                <ul id="subpages_ul">
                <?php wp_list_pages('depth=1&title_li=&child_of='.$post->ID.''); ?>
                </ul>
                            
			<?php } elseif ( is_page(  array('links') ) ) { ?>
            
                <div class="accordion">
                <?php wp_list_bookmarks('title_before=<h3>&title_after=</h3>&before=<li>&after=</li>&show_images=1&show_description=0&orderby=url'); ?>
                </div>
            
            <?php } ?>
            
            </div>
        
        </div><!-- #post-## -->
        
        <?php endwhile;  endif;// end of the loop. ?>
        
        <?php if ( is_page(  array('Issues','Councillors','Green Party Officers','Activists') ) ) { ?>
          <?php if ( is_page(  array('Issues') ) ) { ?>
            <?php query_posts('orderby=menu_order&order=ASC&posts_per_page=-1&post_type=page&post_parent='.$parent); ?>
          <?php } else { ?>
             <?php query_posts('orderby=post_title&order=ASC&posts_per_page=-1&post_type=page&post_parent='.$parent); ?>
          <?php } ?>
            
            <ul id="xyz">
				<?php while (have_posts()) : the_post(); ?>
                
                <li>
                              
				<?php $cti = catch_that_image(); if(isset($cti)){ ?>
                    <a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark">
                        <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=100&amp;w=100&amp;zc=1" alt="Link to <?php the_title(); ?>" class="alignleft"/>
                    </a>
                <?php } else {} ?>

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                
                <?php the_excerpt(); ?>
                
                </li>
                
                <?php endwhile; ?>
            
            	<?php wp_reset_query(); ?>

            </ul>
        
        <?php } ?>
        
<?php if ( is_page(  array('Climate Change') ) ) { ?>

	<?php query_posts('showposts=5&category_name=Climate Change'); ?>

<?php } elseif (is_page(array('Education'))) { ?>

	<?php query_posts('showposts=5&category_name=Education'); ?>

<?php } elseif (is_page(array('Energy'))) { ?>

	<?php query_posts('showposts=5&category_name=Energy'); ?>

<?php } elseif (is_page(array('Housing'))) { ?>

	<?php query_posts('showposts=5&category_name=Housing'); ?>

<?php } elseif (is_page(array('Green New Deal'))) { ?>

	<?php query_posts('showposts=5&category_name=Green New Deal'); ?>

<?php } elseif (is_page(array('Planning'))) { ?>

	<?php query_posts('showposts=5&category_name=Planning'); ?>

<?php } elseif (is_page(array('Transport'))) { ?>

	<?php query_posts('showposts=5&category_name=Transport'); ?>

<?php } elseif (is_page(array('Waste'))) { ?>

	<?php query_posts('showposts=5&category_name=Recycling'); ?>
    
<?php } elseif (is_page(array('Clean, Green Energy'))) { ?>

	<?php query_posts('showposts=5&category_name=Energy'); ?>  
    
<?php } elseif (is_page(array('Greening the Economy'))) { ?>

	<?php query_posts('showposts=5&category_name=economy,income'); ?>

<?php } elseif (is_page(array('Animal Rights'))) { ?>

	<?php query_posts('showposts=5&category_name=Animal Rights'); ?>    

<?php } elseif (is_page(array('By the People, For the People'))) { ?>

	<?php query_posts('showposts=5&category_name=Electoral Reform,Human Rights,LGBT'); ?>     

<?php } elseif (is_page(array('Food we can Trust'))) { ?>

	<?php query_posts('showposts=5&category_name=Agriculture,Food and Drink'); ?> 
    
<?php } elseif (is_page(array('Health and Wellbeing'))) { ?>

	<?php query_posts('showposts=5&category_name=Health'); ?>  
    
<?php } elseif (is_page(array('Peace, Justice and Security'))) { ?>

	<?php query_posts('showposts=5&category_name=Europe,Facism,International,Peace,War and Disarmament'); ?> 

<?php } elseif (is_page(array('TTIP Transatlantic Trade and Investment Partnership'))) { ?>

	<?php query_posts('showposts=5&category_name=TTIP'); ?> 

<?php } elseif (is_page(array('Fracking'))) { ?>

	<?php query_posts('showposts=5&category_name=Fracking'); ?> 

<?php } elseif (is_page(array('Streets Ahead. The battle for our Street Trees'))) { ?>

	<?php query_posts('showposts=5&category_name=Trees'); ?>   

<?php } elseif (is_page(array('EU Referendum-vote Yes'))) { ?>

  <?php query_posts('showposts=5&category_name=EU Referendum'); ?>   
    
<?php } elseif (is_page(array('TTIP- a corporate power grab that must be stopped'))) { ?>

  <?php query_posts('showposts=5&category_name=TTIP'); ?>  

<?php } elseif (is_page()) { ?>

	<?php query_posts('showposts=1&category_name=unknown'); ?>

<?php } ?>

<?php if (have_posts()) : ?>

<h2>Recent Issues</h2>

<?php while (have_posts()) : the_post(); ?>		

<div id="blog">
<div class="cat-post" id="post-<?php the_ID(); ?>">


<h3>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
<?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
</h3>
<p>
<?php echo strip_tags(get_the_excerpt(), '<a><strong>'); ?>
</p>
                
</div>
</div>

<?php endwhile; ?>	

<?php endif; ?>		

<?php wp_reset_query(); ?>
      
        </div><!-- #post -->
    
        <div id="sidebar" class="col-sidebar">

        <a href="/elections/council-elections/greens-can-win-local-elections-2016/" class="election-sidebar__manifesto">
          <h3 class="election-sidebar__sub-heading">5th May Council Elections <strong>Greens can win!</strong></h3>
        </a>
        
        <?php get_sidebar(); ?>
        
        </div><!-- #sidebar -->
    
    </div>

<?php } ?><!-- /Main conditional tag -->

</div>
</div>
<?php get_footer(); ?>
</body>
</html>