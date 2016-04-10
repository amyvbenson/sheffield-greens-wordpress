<div id="post" class="col-main">

  <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1>

  <div id="elections">

    <div class="elections-section council">

      <div class="election-summary">            
        <a rel="nofollow">
          <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=/images/elections/townhall.jpg&amp;h=230&amp;w=230&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
        </a>
        <p>Last election Date: <span class="election-date"><?php if ( get_option('green_last_council_election') <> "" ) { echo stripslashes(get_option('green_last_council_election')); } ?></span></p>
        <p>Next election Date: <span class="election-date"><?php if ( get_option('green_next_council_election') <> "" ) { echo stripslashes(get_option('green_next_council_election')); } ?></span></p>
        <p>For more information, past election results and candidates <a href="<?php bloginfo('url'); ?>/elections/council-elections">click here</a></p>
      </div>

      <div class="election-info">
        <h1>Council Elections</h1>
        <?php if ( get_option('green_info_council_election') <> "" ) { echo stripslashes(get_option('green_info_council_election')); } ?>
        <a rel="nofollow" class="readmore" href="<?php bloginfo('url'); ?>/elections/council-elections/greens-can-win-local-elections-2016/">More on Council Elections &raquo;</a>
      </div>

    </div>

    <div class="elections-section parliamentary">

      <div class="election-summary">            
        <a rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/thumb.php?src=/images/elections/bigben.jpg&amp;h=230&amp;w=230&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
        </a>
        <p>Last election Date: <span class="election-date"><?php if ( get_option('green_last_general_election') <> "" ) { echo stripslashes(get_option('green_last_general_election')); } ?></span></p>
        <p>Next election Date: <span class="election-date"><?php if ( get_option('green_next_general_election') <> "" ) { echo stripslashes(get_option('green_next_general_election')); } ?></span></p>
        <p>For more information, past election results and candidates <a href="<?php bloginfo('url'); ?>/elections/general-elections">click here</a></p>
      </div>

      <div class="election-info">
        <h1>General Elections</h1>
        <?php if ( get_option('green_info_general_election') <> "" ) { echo stripslashes(get_option('green_info_general_election')); } ?>
        <a rel="nofollow" class="readmore" href="<?php bloginfo('url'); ?>/elections/general-elections">More on General Elections &raquo;</a>
      </div>

    </div>

    <div class="elections-section european">

      <div class="election-summary">            
        <a rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/thumb.php?src=/images/elections/europeanparliament.jpg&amp;h=230&amp;w=230&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
        </a>
        <p>Last election Date: <span class="election-date"><?php if ( get_option('green_last_european_election') <> "" ) { echo stripslashes(get_option('green_last_european_election')); } ?></span></p>
        <p>Next election Date: <span class="election-date"><?php if ( get_option('green_next_european_election') <> "" ) { echo stripslashes(get_option('green_next_european_election')); } ?></span></p>
        <p>For more information, past election results and candidates <a href="<?php bloginfo('url'); ?>/elections/european-elections">click here</a></p>
      </div>

      <div class="election-info">
        <h1>European Elections</h1>
        <?php if ( get_option('green_info_european_election') <> "" ) { echo stripslashes(get_option('green_info_european_election')); } ?>
        <a rel="nofollow" class="readmore" href="<?php bloginfo('url'); ?>/elections/european-elections">More on European Elections &raquo;</a>              
      </div>

    </div>

    <div class="elections-section parish">

      <div class="election-summary">            
        <a rel="nofollow"><img src="<?php bloginfo('template_url'); ?>/thumb.php?src=/images/elections/sheffieldpc.jpg&amp;h=230&amp;w=230&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
        </a>
        <p>Last election Date: <span class="election-date"><?php if ( get_option('green_last_parish_election') <> "" ) { echo stripslashes(get_option('green_last_parish_election')); } ?></span></p>
        <p>Next election Date: <span class="election-date"><?php if ( get_option('green_next_parish_election') <> "" ) { echo stripslashes(get_option('green_next_parish_election')); } ?></span></p>
        <p>For more information, past election results and candidates <a href="<?php bloginfo('url'); ?>/elections/parish-elections">click here</a></p>
      </div>

      <div class="election-info">
        <h1>Parish Elections</h1>
        <?php if ( get_option('green_info_parish_election') <> "" ) { echo stripslashes(get_option('green_info_parish_election')); } ?>              
        <a rel="nofollow" class="readmore" href="<?php bloginfo('url'); ?>/elections/parish-elections">More on Parish Elections &raquo;</a>              
      </div>

    </div>

  </div>
</div>