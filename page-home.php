<?php /* Template Name: Home */ ?>

<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>

<body <?php body_class($class); ?>>

 <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>


  <div class="container container--no-pad home-banner home-banner--new">

    <a href="/issues/eu-referendum/" class="home-banner__link">
      <div class="home-banner__image">
      </div>

      <div class="home-banner__content">
        <h2 class="home-banner__heading"><strong>We're Fairer, Safer and Greener in Europe</strong> Vote Remain on 23rd June</h2>
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