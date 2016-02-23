<div id="widecolumn">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <?php $parent = $post->ID; ?>
    
    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1>         
      <div class="entry-content">
        <?php the_content(); ?>
        <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:','sheffieldgreens' ), 'after' => '</div>' ) ); ?>
      </div>

    </div>

  <?php endwhile;  endif;// end of the loop. ?>

  <div class="wards">
    <h2>Wards</h2>

    <img src="<?php echo bloginfo('template_url'); ?>/images/sheffield-wards-map.jpg" alt="Sheffield wards" class="wards__map" />

    <ul class="wards__list">
      <li><a href="<?php bloginfo('url'); ?>/area/beauchief-and-greenhill">1. Beauchief &amp; Greenhill</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/beighton">2. Beighton</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/birley">3. Birley</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/broomhill-and-sharrow-vale-ward">4. Broomhill &amp; Sharrow Vale</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/burngreave">5. Burngreave</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/city-ward">6. City</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/crookes-and-crosspool-ward">7. Crookes &amp; Crosspool</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/darnall">8. Darnall</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/dore-and-totley">9. Dore &amp; Totley</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/east-ecclesfield">10. East Ecclesfield</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/ecclesall">11. Ecclesall</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/firth-park">12. Firth Park</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/fulwood">13. Fulwood</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/gleadless-valley">14. Gleadless Valley</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/graves-park">15. Graves Park</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/hillsborough">16. Hillsborough</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/manor-castle">17. Manor Castle</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/mosborough">18. Mosborough</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/nether-edge-and-sharrow-ward">19. Nether Edge &amp; Sharrow</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/park-and-arbourthorne">20. Park &amp; Arbourthorne</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/richmond">21. Richmond</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/shiregreen-and-brightside">22. Shiregreen &amp; Brightside</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/southey">23. Southey</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/stannington">24. Stannington</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/stocksbridge-and-upper-don">25. Stocksbridge &amp; Upper Don</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/walkley">26. Walkley</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/west-ecclesfield">27. West Ecclesfield</a></li>
      <li><a href="<?php bloginfo('url'); ?>/area/woodhouse">28. Woodhouse</a></li>

    </ul>

  </div>

</div>