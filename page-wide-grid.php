<?php /* Template Name: Wide page with grid */ ?>

<?php get_header(); ?>

<div id="main-container">

<div id="widecolumn" class="page-wide page-wide--grid">

    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

      <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

       <h1 class="page-wide__heading"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1> 

        <?php the_content(); ?>

        <div class="page-grid">

          <?php if (has_block( 'block-1' )) { ?>

          <div class="page-grid__item">

            <?php the_block('block-1'); ?>

          </div>

          <?php } ?>

          <?php if (has_block( 'block-2' )) { ?>

          <div class="page-grid__item">

            <?php the_block('block-2'); ?>

          </div>

          <?php } ?>

          <?php if (has_block( 'block-3' )) { ?>

          <div class="page-grid__item">

            <?php the_block('block-3'); ?>

          </div>

          <?php } ?>

          <?php if (has_block( 'block-4' )) { ?>

          <div class="page-grid__item">

            <?php the_block('block-4'); ?>

          </div>

          <?php } ?>


        </div>
      

    </div><!-- #post-## -->

  <?php endwhile; // end of the loop. ?>

</div>

</div>

<?php get_footer(); ?>