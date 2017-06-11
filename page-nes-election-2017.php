<?php /* Template Name: 2017 NES Election Campaign main */ ?>

<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>

<body <?php body_class($class); ?>>
  <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>

  <div class="container container--no-pad campaign--nes">

      <article class="page-section page-section--large post">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="campaign__heading">
          <h1 class="col-30">
            Vote Rob Unwin for Nether Edge &amp; Sharrow on 22nd June
          </h1>
          <div class="col-70">
          </div>

        </div>

        <div class="actions-banner">
          <a href="/get-involved/rob-unwin-nes/" class="actions-banner__action">
            <span class="actions-banner__heading">Get Involved</span>
            <span class="actions-banner__button">Sign up to help</span>
          </a>
          <a href="/about-us/donate/" class="actions-banner__action">
            <span class="actions-banner__heading">Donate</span>
            <span class="actions-banner__button">Chip in today</span>
          </a>
          <a href="https://my.greenparty.org.uk/civicrm/membership/joining" class="actions-banner__action">
            <span class="actions-banner__heading">Join</span>
            <span class="actions-banner__button">Count me in</span>
          </a>
        </div>

        <div class="col-70">

            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


              <div class="post__body">

                <?php the_content(); ?>

              </div>

        </div>
        </div>
        <div class="col-30 campaign__sidebar">
          <?php  include(TEMPLATEPATH . '/includes/election/nes-election-2017-sidebar.php');  ?>
        </div>
      <?php endwhile; ?>
      </article>


    </div>

  </div>
  <?php get_footer(); ?>
</body>
</html>
