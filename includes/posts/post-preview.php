<div class="post-preview">

  <div class="post-preview__image">
    <?php if ( has_post_thumbnail() ) { ?>
    <?php the_post_thumbnail(array(250,180)) ?>
    <?php } else { ?>
    <?php $cti = catch_that_image(); if(isset($cti)){ ?>
    <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=180&amp;w=250&amp;q=100&amp;zc=1" alt="" />
    <?php } ?>  
    <?php } ?>  

  </div>  

  <div class="post-preview__body">        

    <h3 class="post-preview__heading">
      <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
        <?php the_title(); ?>              
      </a>
    </h3>

    <?php if ( !is_front_page() ) { ?>
      <p class="post-preview__date"><?php the_time(__('jS F, Y', 'default')) ?></p>
    <?php } ?>

    <div class="post-preview__text"><?php the_excerpt(); ?></div>
    
  </div>

  <a aria-hidden="true" tabindex="-1" class="faux-link" data-faux-link="true" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
</div>