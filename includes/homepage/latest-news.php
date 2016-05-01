<div class="home-section">
  <h2 class="home-section__heading">Latest News</h2>

  <?php 
  $the_query = new WP_Query('cat=' . $ex_feat . '&showposts=5&orderby=post_date&order=desc');
  while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
  ?>

    <div class="latest-news-item">

      <div class="latest-news-item__image">
        <?php if ( has_post_thumbnail() ) { ?>
          <?php the_post_thumbnail(array(250,180)) ?>
        <?php } else { ?>
          <?php $cti = catch_that_image(); if(isset($cti)){ ?>
            <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=180&amp;w=250&amp;q=100&amp;zc=1" alt="" />
          <?php } ?>  
        <?php } ?>  
      
       </div>  

       <div class="latest-news-item__body">        

        <h3 class="latest-news-item__heading">
          <a title="<?php the_title(); ?>" href="<?php the_permalink() ?>">
            <?php the_title(); ?>              
          </a>
        </h3>
        <div class="latest-news-item__text"><?php the_excerpt(); ?></div>
      </div>

      <a aria-hidden="true" tabindex="-1" class="faux-link" data-faux-link="true" href="<?php the_permalink() ?>"><?php the_title(); ?></a>
              
    </div>

  <?php endwhile; ?>

  <a href="/news" class="home-section__more-link">
    More news
  </a>
</div>