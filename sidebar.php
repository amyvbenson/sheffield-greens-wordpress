<div id="primary" class="widget-area">

    <?php include(TEMPLATEPATH . '/includes/version.php'); ?>
    
    <?php if ( is_page( array('About Us!','Get Involved','Affinity Schemes','People','Activists','Councillors','Green Party Officers','faqs','Why Join?','Donate')) ) { ?>

    <h1 class="side_subpages-title">Sheffield Greens</h1> 
       
    <ul class="side_subpages">
        <?php wp_list_pages('depth=1&title_li=&child_of='.$post->ID.''); ?>
    </ul>
    
    <?php } ?>
         
    <?php if ( is_single() || is_archive() ) { ?>
    
    <div id="archives_banner">
        <a class="archives" href="<?php echo bloginfo('wpurl').'/?page_id='.$GLOBALS['archives_id']; ?>"></a>
    </div>
    
                            
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
