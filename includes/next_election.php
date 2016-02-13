<?php if ( get_option('green_show_election_banner')) { ?>

  <div class="next_election">
    
  	<div class="ballot_box">
     
      <a rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/thumb.php?src=/images/elections/ballot_box.gif&amp;h=240&amp;w=250&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
      </a>
      
    </div>
    
    <div class="election_info">
      <h1>The Next Election is <?php if ( get_option('green_forthcoming_election') <> "" ) { echo stripslashes(get_option('green_forthcoming_election')); } ?></h1>
      
      <?php if ( get_option('green_forthcoming_election_info') <> "" ) { echo stripslashes(get_option('green_forthcoming_election_info')); } ?>              
    </div>

  </div>

<?php } ?>