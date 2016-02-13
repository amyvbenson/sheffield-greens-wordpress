<?php
/*
Template Name: Election
*/
?>

<?php get_header(); ?>

<div id="main-container">
  <div id="container">

   <div id="post" class="col-main">

    <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1>


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>">

        <?php $parent = $post->ID; ?>

        <div class="page">
          <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
          <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

        </div>

      <?php endwhile; endif; ?>

      <?php query_posts('orderby=menu_order&order=ASC&posts_per_page=-1&post_type=page&post_parent='.$parent); ?>

      <?php while (have_posts()) : the_post(); ?>

        <div class="election-page-section">

          <div class="election-page-image">
            <a href="<?php the_permalink(); ?>">
              <?php

              if ( has_post_thumbnail() )
                the_post_thumbnail( array(230,230), array('class' => '-') );
              else

                echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/thumb.php?src=/images/vote_x.png&amp;h=230&amp;w=230&amp;zc=1" alt="logo" title="cdas logo" />';
              ?>
            </a>
          </div>

          <div class="election-page-info">

            <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

            <?php the_excerpt(); ?>
            
            <a rel="nofollow" class="readmore" href="<?php the_permalink(); ?>">View <?php the_title(); ?> &raquo;</a>

          </div>

        </div>
      <?php endwhile; ?>

    </div>

  </div>

  <?php include(TEMPLATEPATH . '/includes/elections_sidebar.php'); ?>

</div><!-- #container -->
</div>


<?php get_footer(); ?>