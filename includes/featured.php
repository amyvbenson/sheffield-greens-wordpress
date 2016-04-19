<div id="featured-content">

  <div id="feat-menu">

    <ul class="idTabs featured-menu">
     <li class="featured-menu-item featured"><a href="#featured">Welcome</a></li>
     <li class="featured-menu-item video"><a href="#video">Recent Videos</a></li>
     <li class="featured-menu-item most-popular"><a href="#most-popular">Most Popular </a></li>
     <li class="featured-menu-item donate"><a href="#donate">Donate</a></li>
     <li class="featured-menu-item home-info"><a href="#home-info">Join the Green Party</a></li>
     <li class="featured-menu-item search-info"><a href="#search-info">Search</a></li>
   </ul>

 </div>

 <div id="featured" class="featured-section">

  <div id="slider-posts" class="featured-list">


    <?php 
      $showfeatured = get_option('green_featured_entries'); // Number of other entries to be shown
      include(TEMPLATEPATH . '/includes/version.php');
                
      $the_query = new WP_Query('cat=' . $ex_feat . '&showposts=' . $showfeatured . '&orderby=post_date&order=desc');

      while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
    ?>

        <div class="featured-list-item">

          <div class="featured-list-image view view-tenth">
          <?php if ( has_post_thumbnail() ) { ?>
           <?php the_post_thumbnail(array(250,180)) ?>
          <?php } else { ?>
            <?php $cti = catch_that_image(); if(isset($cti)){ ?>

            <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=180&amp;w=250&amp;q=100&amp;zc=1" alt="Featured article image" />
            <?php } ?>	
          <?php } ?>  

            <div class="mask">
             <h2><?php the_title(); ?></h2>
             <?php the_excerpt(); ?>
             <a href="<?php the_permalink() ?>" class="info">Read More</a>
           </div> 
          </div>          

          <a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark" class="featured-list-content">

            <h2>
              <?php the_title(); ?>              
            </h2>
            

          </a>
          <?php edit_post_link( __( 'edit','sheffieldgreens' ), '<span class="featured-list-edit-link">', '</span>' ); ?>
          
        </div>

    <?php endwhile; ?>
            
  </div><!-- /features -->

  <div class="featured-sidebar-articles feat-ar">


    <!---->        
    <span id="shop_link">
      <a href="http://shop.sheffieldgreenparty.org.uk/">Visit the Sheffield Green Party Shop</a>
    </span>

    <?php include(TEMPLATEPATH . '/includes/version.php'); ?>

    <?php query_posts($query_string . 'showposts=26&orderby=post_date&cat=-5,-6683,-6684'); ?>
    <ul id="recent-article">
      <?php if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>	

          <li class="nums"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a> <?php edit_post_link( __( 'edit article','sheffieldgreens' ), '<span class="edit-link">', '</span>' ); ?></li>

        <?php endwhile; ?>

      <?php endif; ?>	

    </ul>  

  </div>

</div><!-- /featured -->
        
<div id="video"  class="featured-section">

  <!-- <div id="videos"> -->

    <?php include(TEMPLATEPATH . '/includes/video.php'); ?>

  <!-- </div>         -->

</div><!-- /video -->

<div id="most-popular"  class="featured-section">

  <div class="featured-main"> 
    <?php if ( function_exists('wp_cumulus_insert') ) { ?>

    <?php wp_cumulus_insert(); ?>

    <?php } ?>	  
  </div>
  
  <div class="featured-sidebar">

    <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FSheffieldGreenParty%3Ffref%3Dts&amp;width=240&amp;height=458&amp;colorscheme=light&amp;show_faces=true&amp;header=false&amp;stream=false&amp;show_border=false" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:458px;" allowTransparency="true"></iframe>

  </div>


</div><!-- /tag-cloud -->

<div id="donate"  class="featured-section">


  <div id="donations" class="featured-main-wide">

    <h2>Donate</h2>

    <?php if ( function_exists('DonatePlusTotal') ) { ?>

    <p class="total_amount">Donated so far<span class="total"><?php DonatePlusTotal(); ?></span></p>

    <?php } ?>

    <?php if ( function_exists('DonatePlusForm') ) { ?>

    <?php DonatePlusForm(); ?>

    <?php } ?>	          

  </div>      
  <div class="featured-main-wide">
    <div class="donation_info">

      <p>We don't get donations from big private companies and unions like other parties do. Instead, we rely on small donations from lots of individuals. Can you help, please?</p>
      <p>What your donation could fund :</p>

      <p><strong>&pound;20</strong> would pay for 750 window posters for the next local elections.</p>
      <p><strong>&pound;50</strong> would pay for 2,000 full colour council election leaflets to elect more councillors.</p>
      <p><strong>&pound;100</strong> would pay for 10,000 full colour leaflets to elect an MEP in the region in May 2014. Under the Freepost scheme those leaflets will be delivered free by The Royal Mail saving &pound;5,000 postage costs </p>
      <p>Every pound helps us to get our message across and get more Greens elected. Please <a href="http://sheffieldgreenparty.org.uk/about-us/donate/">click here</a> to make a donation.</p> 


    </div>
  </div>

</div><!-- /donate -->

<div id="home-info"  class="featured-section">


  <div id="home" class="featured-main">

    <?php include (TEMPLATEPATH . '/welcome.php'); ?>

  </div> 

  <div class="joinus featured-sidebar">
    <div id="join-us">
      <!-- BEGIN JOIN TITLE -->
      <div id="join">
        <a id="join-link" href="http://join.greenparty.org.uk/"></a>
      </div>


        </div>            
      </div>

    </div><!-- /home-info --> 
    
<div id="search-info"  class="featured-section"> 

  <div id="search_box">
    <p>To search the website, please use the form below. If you are having problems or you can not find what you are looking for, please contact us using the options on our contact page.</p>
    <?php get_search_form(); ?> 

  </div>

</div> 

</div> <!-- /featured-content -->