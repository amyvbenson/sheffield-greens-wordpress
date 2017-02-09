<?php /* Template Name: Home */ ?>

<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>

<body <?php body_class($class); ?>>

  <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>


  <?php include(TEMPLATEPATH . '/includes/homepage/banner.php'); ?>


  <div class="container container--no-pad">

    <div class="col-50">

      <?php include(TEMPLATEPATH . '/includes/homepage/latest-news.php'); ?>

    </div>

    <div class="col-50">

      <a href="http://www.crowdfunder.co.uk/a-green-voice-for-yorkshire" class="home-cta-large">
        <strong>A Green Voice for the North</strong>
        Help us raise funds to elect Natalie Bennett as the Green Party MP for Sheffield Central, the first Green MP in the North of England
      </a>

    

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
