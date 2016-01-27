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
	
    	  <p><img src="<?php echo bloginfo('template_url'); ?>/images/X-20090129153042390-[Latest].png" alt="" width="900" height="511" border="0" usemap="#Map2" class="mapper noborder iradius16 iopacity70 icolorff0000" style="width: auto; height: auto;" href="<?php bloginfo('url'); ?>/area/east-ecclesfield"/></p>
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

<?php include(TEMPLATEPATH . '/includes/next_election.php'); ?>

    <div id="container">
    
        <div id="post">
            
            <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1>
            
            <div id="elections">
            
            <div class="council">
            
            <div class="infoleft">            
            <a rel="nofollow">
            <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=/images/elections/townhall.jpg&amp;h=230&amp;w=230&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
            </a>
             <p>Last election Date: <span class="election_date"><?php if ( get_option('green_last_council_election') <> "" ) { echo stripslashes(get_option('green_last_council_election')); } ?></span></p>
             <p>Next election Date: <span class="election_date"><?php if ( get_option('green_next_council_election') <> "" ) { echo stripslashes(get_option('green_next_council_election')); } ?></span></p>
             <p>For more information, past election results and candidates <a href="<?php bloginfo('url'); ?>/elections/council-elections">click here</a></p>
            </div>
            
            <div class="election_info">
              <h1>Council Elections</h1>
              <?php if ( get_option('green_info_council_election') <> "" ) { echo stripslashes(get_option('green_info_council_election')); } ?>
              <a rel="nofollow" class="readmore" href="<?php bloginfo('url'); ?>/elections/council-elections">More on Council Elections &raquo;</a>
            </div>
            
            </div>
            
            <div class="parliamentary">
            
            <div class="infoleft">            
            <a rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/thumb.php?src=/images/elections/bigben.jpg&amp;h=230&amp;w=230&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
            </a>
            <p>Last election Date: <span class="election_date"><?php if ( get_option('green_last_general_election') <> "" ) { echo stripslashes(get_option('green_last_general_election')); } ?></span></p>
            <p>Next election Date: <span class="election_date"><?php if ( get_option('green_next_general_election') <> "" ) { echo stripslashes(get_option('green_next_general_election')); } ?></span></p>
            <p>For more information, past election results and candidates <a href="<?php bloginfo('url'); ?>/elections/general-elections">click here</a></p>
            </div>
            
            <div class="election_info">
              <h1>General Elections</h1>
              <?php if ( get_option('green_info_general_election') <> "" ) { echo stripslashes(get_option('green_info_general_election')); } ?>
              <a rel="nofollow" class="readmore" href="<?php bloginfo('url'); ?>/elections/general-elections">More on General Elections &raquo;</a>
            </div>
            
            </div>
            
            <div class="european">
            
            <div class="infoleft">            
            <a rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/thumb.php?src=/images/elections/europeanparliament.jpg&amp;h=230&amp;w=230&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
            </a>
            <p>Last election Date: <span class="election_date"><?php if ( get_option('green_last_european_election') <> "" ) { echo stripslashes(get_option('green_last_european_election')); } ?></span></p>
            <p>Next election Date: <span class="election_date"><?php if ( get_option('green_next_european_election') <> "" ) { echo stripslashes(get_option('green_next_european_election')); } ?></span></p>
            <p>For more information, past election results and candidates <a href="<?php bloginfo('url'); ?>/elections/european-elections">click here</a></p>
            </div>
            
            <div class="election_info">
              <h1>European Elections</h1>
              <?php if ( get_option('green_info_european_election') <> "" ) { echo stripslashes(get_option('green_info_european_election')); } ?>
              <a rel="nofollow" class="readmore" href="<?php bloginfo('url'); ?>/elections/european-elections">More on European Elections &raquo;</a>              
            </div>
            
            </div>
            
            <div class="parish">
            
            <div class="infoleft">            
            <a rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/thumb.php?src=/images/elections/sheffieldpc.jpg&amp;h=230&amp;w=230&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
            </a>
            <p>Last election Date: <span class="election_date"><?php if ( get_option('green_last_parish_election') <> "" ) { echo stripslashes(get_option('green_last_parish_election')); } ?></span></p>
            <p>Next election Date: <span class="election_date"><?php if ( get_option('green_next_parish_election') <> "" ) { echo stripslashes(get_option('green_next_parish_election')); } ?></span></p>
            <p>For more information, past election results and candidates <a href="<?php bloginfo('url'); ?>/elections/parish-elections">click here</a></p>
            </div>
            
            <div class="election_info">
              <h1>Parish Elections</h1>
              <?php if ( get_option('green_info_parish_election') <> "" ) { echo stripslashes(get_option('green_info_parish_election')); } ?>              
              <a rel="nofollow" class="readmore" href="<?php bloginfo('url'); ?>/elections/parish-elections">More on Parish Elections &raquo;</a>              
            </div>
            
            </div>
            
            </div>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        
			<?php /*?><div class="entry-content">
                <?php the_content(); ?>
                <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:','sheffieldgreens' ), 'after' => '</div>' ) ); ?>
            </div><!-- .article --><?php */?>
        
        </div><!-- #post-## -->
                
<?php endwhile; // end of the loop. ?>

			</div><!-- #post -->
    
        <div class="election_sidebar" id="sidebar">
            
              <h3>Want to vote? Register now!</h3>
              
              <p>To be able to vote you must be on the electoral register and be 18 or   over on or before polling. If you are a citizen of an EU member state registered to vote in this country, you are entitled do vote in the   council elections only. Contact Electoral Services on (0114) 273 6910 if you&rsquo;re not sure whether you are registered and any other information.</p>
              
              <h3>Forms to download :</h3>
              
              <p><a href="https://www.sheffield.gov.uk/your-city-council/elections/register" target="_new" >Electoral Registration Form</a></p>
              
              <p>Are you likely to be out of Sheffield on polling day? A student studying elsewhere in the country? You need to think about completing a   postal or proxy voting registration form.</p>
              
              <p>Postal vote: <a href="http://www.sheffield.gov.uk/your-city-council/elections/voting-by-post" target="_new" >http://www.sheffield.gov.uk/your-city-council/elections/voting-by-post</a>.</p>
              
              <p>Proxy vote: <a href="http://www.sheffield.gov.uk/your-city-council/elections/voting-by-proxy" target="_new" >http://www.sheffield.gov.uk/your-city-council/elections/voting-by-proxy</a></p>
              
              <h3>Election Links</h3>
              
              <p><a href="http://yorkshireandhumber.greenparty.org.uk/region/yorkshireandhumber" target="_self"><strong>Yorkshire and Humber Green Party</strong></a>              </p>
<p><a href="http://www.greenparty.org.uk/policies.html"><strong>National Policies: </strong>Key priorities for Green Party Action</a></p>
              <p><a href="http://www.youtube.com/greenpartyew"><strong>YouTube: </strong>Visit the Green Party's YouTube channel</a></p>
              
              <h3>Why not give us a hand?</h3>
              
              <p>We are always keen to hear from people willing to lend a hand with   delivering leaflets, canvassing for votes, or spending some time with   activities. Eamonn Ward is always glad to hear from people willing to   support, <a href="mailto:info@sheffieldgreenparty.org.uk">send Eamonn an email</a> or telephone him on <strong>0750 3883740 or 0114 231 1548</strong></p>
              
          <h3>Download a window poster</h3>
              
              <p><a href="<?php bloginfo('url'); ?>/files/2010/04/A4_Poster_2010_Sheffield_GP.pdf">General Poster &ndash; <strong>Vote Green Party</strong></a></p>

            </div><!-- #sidebar -->
    
    </div>    

<?php } elseif (is_page()) { ?>

    <div id="container">
    
        <div id="post">
        
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
    
        <div id="sidebar">
        
        <?php get_sidebar(); ?>
        
        </div><!-- #sidebar -->
    
    </div>

<?php } ?><!-- /Main conditional tag -->

</div>

<?php get_footer(); ?>
