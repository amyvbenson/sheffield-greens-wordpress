<?php /* Template Name: 2017 Election Campaign */ ?>

<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>

<body <?php body_class($class); ?>>

  <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>

  <div class="container container--no-pad campaign--nb">

      <article class="page-section page-section--large post">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="campaign__heading">
          <h1 >
            <?php the_title(); ?>
          </h1>
        </div>
        <div class="col-70">

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


              <div class="post__body">

                <?php the_content(); ?>

              </div>

        </div>
        </div>
        <div class="col-30 campaign__sidebar">
          <?php  include(TEMPLATEPATH . '/includes/election/election-2017-sidebar.php');  ?>
        </div>
      <?php endwhile; ?>
      </article>


    </div>

  </div>
  <?php get_footer(); ?>
</body>
</html>
