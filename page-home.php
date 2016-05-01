<?php /* Template Name: Home */ ?>

<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>

<body <?php body_class($class); ?>>

  <header class="main-header">

    <div class="container">

      <h1>
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="main-header__logo"/>
      </h1>     
      <p class="main-header__tagline"><?php bloginfo('description'); ?></p>

      <?php include(TEMPLATEPATH . '/includes/header/header-social.php'); ?>
      <?php include(TEMPLATEPATH . '/includes/header/header-search.php'); ?>

    </div>

    <?php include(TEMPLATEPATH . '/includes/header/main-nav.php'); ?>

  </header>


  <div class="container container--no-pad home-banner home-banner--new">

    <a href="/elections/council-elections/greens-can-win-local-elections-2016/" class="home-banner__link">
      <div class="home-banner__image">
      </div>

      <div class="home-banner__content">
        <h2 class="home-banner__heading">5th May Council Elections <strong>Meet your candidates &amp; read our vision for Sheffield</strong></h2>
      </div>

    </a>

  </div>


  <div class="container container--no-pad">

    <div class="col-50">

      <?php include(TEMPLATEPATH . '/includes/homepage/latest-news.php'); ?>

    </div>

    <div class="col-50">

      <?php include(TEMPLATEPATH . '/includes/homepage/latest-video.php'); ?>

      <a href="https://my.greenparty.org.uk/civicrm/membership/joining" class="home-cta">
        Join the Green Party
      </a>

      <a href="http://shop.sheffieldgreenparty.org.uk/" class="home-cta">
        Visit our shop
      </a>

      <a href="/about-us/donate" class="home-cta">
        Donate to Sheffield Green Party
      </a>

    </div>

  </div>

  <div class="home-footer">
    <?php get_footer(); ?>
  </div>

</body>
</html>