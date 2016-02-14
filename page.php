<?php get_header(); ?>

<div id="main-container">

<?php if ( is_page(array('area')) ) { ?><!-- Main conditional tag -->

    <div id="widecolumn">
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
    <?php $parent = $post->ID; ?>
    
        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
            <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1>         
            <div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:','sheffieldgreens' ), 'after' => '</div>' ) ); ?>
            </div><!-- .article -->
        
        </div>
            
    <?php endwhile;  endif;// end of the loop. ?>
    
    <div id="proposedmap">
		<div id="sheffmap">
	
    	  <p><img src="<?php echo bloginfo('template_url'); ?>/images/X-20090129153042390-[Latest].png" alt="" border="0" usemap="#Map2" class="mapper noborder iradius16 iopacity70 icolorff0000" style="width: auto; height: auto;" href="<?php bloginfo('url'); ?>/area/east-ecclesfield"/></p>
		  <p>
		    
		    <map name="Map2" id="Map2">
            
		      <area shape="rect" coords="159,394,230,411" href="southey" />
		      <area shape="rect" coords="18,478,115,493" href="mosborough" />
              <area shape="rect" coords="159,480,253,494" href="woodhouse" />
              <area shape="rect" coords="18,460,121,477" href="manor-castle" />
              <area shape="rect" coords="159,462,268,479" href="west-ecclesfield" />
                  <area shape="rect" coords="159,413,260,428" href="stannington" />
		      <area shape="rect" coords="18,445,118,459" href="hillsborough" />
              <area shape="rect" coords="159,443,228,461" href="walkley" />
              <area shape="rect" coords="19,429,108,444" href="graves-park" />
              <area shape="rect" coords="18,411,129,427" href="gleadless-valley" />
                  <area shape="rect" coords="159,429,326,442" href="stocksbridge-and-upper-don" />
		      <area shape="rect" coords="19,393,98,410" href="fulwood" />
              <area shape="rect" coords="19,224,79,240" href="birley" />
              <area shape="rect" coords="19,242,175,259" href="broomhill-and-sharrow-vale-ward" />
              <area shape="rect" coords="19,260,101,274" href="burngreave" />
              <area shape="rect" coords="19,275,65,292" href="city-ward" />
              <area shape="rect" coords="19,293,156,307" href="crookes-and-crosspool-ward" />
              <area shape="rect" coords="19,307,78,324" href="darnall" />
              <area shape="rect" coords="19,325,110,342" href="dore-and-totley" />
              <area shape="rect" coords="19,344,126,358" href="east-ecclesfield" />
              <area shape="rect" coords="19,360,98,374" href="ecclesall" />
              <area shape="rect" coords="19,376,98,392" href="firth-park" />
              <area shape="rect" coords="159,326,309,341" href="nether-edge-and-sharrow-ward" />
                  <area shape="rect" coords="19,188,156,205" href="beauchief-and-greenhill" />
		      <area shape="rect" coords="159,342,296,359" href="park-and-arbourthorne" />
              <area shape="rect" coords="159,361,245,376" href="richmond" />
              <area shape="rect" coords="159,378,310,392" href="shiregreen-and-brightside" />
              <area shape="rect" coords="19,207,86,223" href="beighton" />
		    </map>
	      </p>
      </div>
	</div>
    
    </div>
    
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
    
<?php } elseif (is_page()) { ?>

	<?php query_posts('showposts=1&category_name=unknown'); ?>

<?php } ?>

<?php if (have_posts()) : ?>

<h3>Recent Issues</h3>

<?php while (have_posts()) : the_post(); ?>		

<div id="blog">
<div class="cat-post" id="post-<?php the_ID(); ?>">

<p>
<h2>
<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
<?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?>
</h2>

<?php echo strip_tags(get_the_excerpt(), '<a><strong>'); ?>
</p>
                
</div>
</div>

<?php endwhile; ?>	

<?php endif; ?>		

<?php wp_reset_query(); ?>
      
        </div><!-- #post -->
    
        <div id="sidebar" class="col-sidebar">
        
        <?php get_sidebar(); ?>
        
        </div><!-- #sidebar -->
    
    </div>

<?php } ?><!-- /Main conditional tag -->

</div>

<?php get_footer(); ?>
