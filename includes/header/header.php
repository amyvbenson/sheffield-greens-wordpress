<div class="archive-banner">
  <div class="container">
    <p>This is an archive site. For recent Sheffield Green Party news and information go to <a href="https://sheffieldgreenparty.org.uk">sheffieldgreenparty.org.uk</a></p>
  </div>
</div>

 <header class="main-header">

  <div class="container">

    <?php if (is_front_page()) { ?>
      <h1>
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="Sheffield Green Party Homepage" class="main-header__logo"/>
      </h1>
    <?php } else { ?>
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
        <img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="main-header__logo"/>
      </a>
    <?php } ?>

    <?php include(TEMPLATEPATH . '/includes/header/header-search.php'); ?>

  </div>

</header>
