<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>
<body <?php body_class($class); ?>>

  <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>
  <div class="container container--no-pad">
    <div class="col-70">
      <div class="page-section page-section--large post">
        <h1 class="post__heading">Content not found</h1>
        <p>This is somewhat embarrassing, isn't it?</p>
        <p>It looks like nothing was found at this location. Maybe try a search?

        <div class="archive-search">
          <?php get_search_form(); ?>
        </div>

        </div>
      </div>
      <div class="col-30">
        <div class="page-section post-sidebar">
          <?php get_sidebar(); ?>
        </div>
      </div>
    </div>

    <?php get_footer(); ?>
  </body>
  </html>
