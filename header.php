<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta http-equiv="Content-Type" content="<?php bloginfo( 'html_type' ); ?>; charset=<?php bloginfo( 'charset' ); ?>" />
    <meta content="width=device-width, initial-scale=1" name="viewport">
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/favicon.ico" />

    <!--[if lt IE 9]>
        <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/ie8.css" type="text/css"/>
    <![endif]-->
    <!--[if gt IE 8]> <!-- -->
        <link rel="stylesheet" type="text/css" media="screen" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <!-- <![endif]-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/print.css" type="text/css" media="print" />

	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/includes/banner/demo.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/includes/banner/bjqs.css" type="text/css" media="screen" />

	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
   
    <!--[if lt IE 7]>
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/ie6/ie6.css" />
    <![endif]-->
    
    <title>
    <?php if ( is_front_page() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
    
    <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Search Results<?php } ?>
    
    <?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php bloginfo('name'); ?><?php } ?>
    
    <?php if ( is_page() && !is_front_page() ) { ?><?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
    
    <?php if ( is_category() ) { ?><?php bloginfo('name'); ?> | Archive | <?php single_cat_title(); ?><?php } ?>
    
    <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archive | <?php the_time('F'); ?><?php } ?>
    
    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Tag Archive | <?php  single_tag_title("", true); } } ?>
    </title>
    
    <?php

	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
	 
	wp_head();
	?>

    <?php if ( is_singular()||is_archive()): ?>
        <style>
        @media (min-width: 768px) {
            .banner {
                background: url('<?php header_image(); ?>') center 100% no-repeat;
            }
        }
        </style>
    <?php endif; ?>   

</head>

<body <?php body_class($class); ?>>
<!-- BEGIN OPTIONS POPUP -->
<div id="utility" class="top-header">
<?php include(TEMPLATEPATH . '/includes/popup-panel.php'); ?>
</div>
<!-- END OPTIONS POPUP -->

<div id="main">
<!-- BEGIN HEADER -->
<div id="green-header">

<!-- BEGIN NAVIGATION MENU -->
    <div id="access" class="nav" role="navigation">   
	
		<?php wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'Main' ) ); ?>

        <button class="search-button" data-toggle-search>Search</button>

        <button class="nav-button" data-toggle-nav>Menu</button>
    
    </div>
<!-- END NAVIGATION MENU -->

<?php if ( is_page(array('Home')) ) {
	
	 ?><!-- Main conditional tag -->

<!--no banner-->
<?php } else { ?>

<!-- BEGIN BANNER -->
    <div id="banner" class="banner">

		        
    <!-- BEGIN LOGO -->
 			<a class="home-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			<h1 class="site-title"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"/></h1>
                
            <h2 class="description"><?php bloginfo('description'); ?></h2>
            
			</a>

           
    <!-- END LOGO-->
        

    <!-- BEGIN SEARCH FORM-->
    <div class="header-search">
        <?php get_search_form(); ?>
    </div>
                   
    <!-- END SEARCH FORM-->
    
    </div> 
<!-- END BANNER -->

<?php } ?><!-- /Main conditional tag -->

</div>
<!-- END HEADER -->