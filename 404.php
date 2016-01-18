<?php get_header(); ?>

<div id="main-container">

	<div id="container">
    
    
    <div id="post">

				<h1 class="page_h1"><?php _e( 'Content not found!', 'twentythirteen' ); ?></h1>

    <div class="newsentry">	         		
   				
					<h2><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentythirteen' ); ?></h2>
					<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'twentythirteen' ); ?></p>

					<?php get_search_form(); ?>

    </div>
    
</div>
<!-- END ENRTY LAYOUT -->							

    </div> <!-- /content -->
    
    <div id="sidebar">
    	<?php get_sidebar(); ?>
    </div> <!-- /sidebar -->
    
    </div> <!-- /container -->
    
</div> <!-- /main-container -->

<?php get_footer(); ?>