<div id="primary" class="widget-area">

    <a class="campaign__sidebar-cta-block campaign__sidebar-cta-block--n4s" href="http://natalie4sheffield.org">
        <span class="campaign__sidebar-cta-tagline-small">Vote for change</span>
        <span class="campaign__sidebar-cta-tagline">#natalie<em>4</em>sheffield</span>
    </a>

    <a class="campaign__sidebar-cta-block campaign__sidebar-cta-block--guarantee" href="https://www.greenparty.org.uk/green-guarantee">
        <span class="campaign__sidebar-cta-tagline">Our Green Guarantee</span>
    </a>

    <?php include(TEMPLATEPATH . '/includes/version.php'); ?>

    <?php if ( is_page( array('About Us!','Get Involved','Affinity Schemes','faqs','Why Join?','Donate')) ) { ?>

    <h1 class="side_subpages-title">Sheffield Greens</h1>

    <ul class="side_subpages">
        <?php wp_list_pages('depth=1&title_li=&child_of='.$post->ID.''); ?>
    </ul>

    <?php } ?>

    <?php if ( is_page( array('People','Activists','Councillors','Green Party Officers')) ) { ?>

    <h1 class="side_subpages-title">Sheffield Greens</h1>

    <ul class="side_subpages">
        <?php wp_list_pages('depth=1&title_li=&child_of='.$post->ID.'&sort_column=post_title'); ?>
    </ul>

    <?php } ?>

    <?php if ( is_single() || is_archive() ) { ?>

        <a class="sidebar__archives" href="<?php echo bloginfo('wpurl').'/?page_id='.$GLOBALS['archives_id']; ?>">
            Browse the archives
        </a>


    <?php } ?>


    <?php if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>


    <?php endif; // end primary widget area ?>

</div><!-- #primary .widget-area -->

<?php

// A second sidebar for widgets, just because.
if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

    <div id="secondary" class="widget-area" role="complementary">
        <ul class="xoxo">
            <?php dynamic_sidebar( 'secondary-widget-area' ); ?>
        </ul>
    </div><!-- #secondary .widget-area -->

<?php endif; ?>
