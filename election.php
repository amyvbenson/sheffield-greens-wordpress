<?php
/*
Template Name: Election
*/
?>

<?php get_header(); ?>

<div id="main-container">
		<div id="container">
        
			<div id="post">
            
            <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1>
            
            
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
           
            <div id="post-<?php the_ID(); ?>">
            
            <?php $parent = $post->ID; ?>
            
            <div class="page">
            <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
            <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            
            </div>
            
            <?php endwhile; endif; ?>
            
            <?php query_posts('orderby=menu_order&order=ASC&posts_per_page=-1&post_type=page&post_parent='.$parent); ?>
            
            <?php while (have_posts()) : the_post(); ?>
            
            <div class="election_page">
            
            <div class="page_infoleft">
            <a href="<?php the_permalink(); ?>">
                <?php
                    
                    if ( has_post_thumbnail() )
                        the_post_thumbnail( array(230,230), array('class' => '-') );
                    else
                    
                    echo '<img class="alignleft" src="' . get_bloginfo( 'stylesheet_directory' ) . '/thumb.php?src=/images/vote_x.png&amp;h=230&amp;w=230&amp;zc=1" alt="logo" title="cdas logo" />';
                ?>
                </a>
            </div>
                       
            <div class="electionpage_info">

            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        
            <?php the_excerpt(); ?>
            
			<a rel="nofollow" class="readmore" href="<?php the_permalink(); ?>">View <?php the_title(); ?> &raquo;</a>

            </div>
            
            </div>
            <?php endwhile; ?>
           
            </div>
            
			</div>
            
            <div class="election_sidebar" id="sidebar">
            
              <h3>Want to vote? Register now!</h3>
              
              <p>To be able to vote you must be on the electoral register and be 18 or   over on or before polling. If you are a citizen of an EU member state registered to vote in this country, you are entitled do vote in the   council elections only. Contact Electoral Services on (0114) 273 6910 if you&rsquo;re not sure whether you are registered and any other information.</p>
              
              <h3>Forms to download :</h3>
              
              <p>Registration form and information: <a href="http://www.aboutmyvote.co.uk">www.aboutmyvote.co.uk</a></p>
              
              <p>Are you likely to be out of Sheffield on polling day ? A student   studying elsewhere in the country ? You need to think about completing a   postal or proxy voting registration form.</p>
              
              <p>Postal vote :<a href="http://www.sheffield.gov.uk/your-city-council/elections/voting-by-post">http://www.sheffield.gov.uk/your-city-council/elections/voting-by-post</a>.</p>
              
              <p>Proxy vote : <a href="http://www.sheffield.gov.uk/your-city-council/elections/voting-by-proxy">http://www.sheffield.gov.uk/your-city-council/elections/voting-by-proxy</a></p>
              
              <h3>Election Links</h3>
              
              <p><a href="http://yorkshireandhumber.greenparty.org.uk/region/yorkshireandhumber" target="_self"><strong>Yorkshire and Humber Green Party</strong></a></p>
              
              <p><a href="<?php bloginfo('url'); ?>/issues/new-green-deal/"><strong>Green   New Deal: </strong>What is Sheffield Green Party doing doing locally</a></p>
              <p><a href="http://www.greenparty.org.uk/policies.html"><strong>National Policies: </strong>Key priorities for Green Party Action</a></p>
              <p><a href="http://www.youtube.com/greenpartyew"><strong>YouTube: </strong>Visit the Green Party's YouTube channel</a></p>
              
              <h3>Why not give us a hand?</h3>
              
              <p>We are always keen to hear from people willing to lend a hand with   delivering leaflets, canvassing for votes, or spending some time with   activities. Eamonn Ward is always glad to hear from people willing to   support, <a href="mailto:info@sheffieldgreenparty.org.uk">send Eamonn an email</a> or telephone him on <strong>(0114) 231 1548</strong></p>
              
              <h3>Download a window poster</h3>
              
              <p><a href="<?php bloginfo('url'); ?>/files/2010/04/A4_Poster_2010_Sheffield_GP.pdf">General Poster &ndash; <strong>Vote Green Party</strong></a></p>

            </div><!-- #sidebar -->

		</div><!-- #container -->
</div>


<?php get_footer(); ?>