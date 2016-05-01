<?php 
global $user_identity, $user_ID;  
?>

<ul class="container footer-admin-menu">
  <?php if (is_user_logged_in()) { ?>
    <li><a href="<?php echo wp_logout_url(get_permalink()); ?>" rel="nofollow" title="<?php _e('Log out','sheffieldgreens'); ?>"><?php _e('Log out','sheffieldgreens'); ?></a></li>
    <li><a href="<?php bloginfo('url') ?>/wp-admin/index.php">Dashboard</a></li>
    
    <?php if ( current_user_can('level_1') ) { ?>
      <li><a href="<?php bloginfo('url') ?>/wp-admin/edit-comments.php">Comments</a></li>
    <?php } ?>

    <?php if ( current_user_can('level_2') ) { ?>
      <li><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php">New Post</a></li>
      <li><a href="<?php bloginfo('url') ?>/wp-admin/edit.php">Edit Posts</a></li>

      <?php if ( current_user_can('level_3') ) { ?> 
        <li><a href="<?php bloginfo('url') ?>/wp-admin/post-new.php?post_type=page">New Page</a></li>
        <li><a href="<?php bloginfo('url') ?>/wp-admin/edit.php?post_type=page">Edit Pages</a></li>
      <?php } ?>

    <?php } ?>

  <?php } else {  ?>
    <li><a href="<?php bloginfo('url') ?>/wp-admin/">Log in</a></li>
  <?php } ?>
</ul>
