<div id="featuredCategoriesTabs">

    <ul class="tabs">
       <li class="active"><a href="#tab1">City Wide</a></li>
       <li><a href="#tab2">Health</a></li>
       <li><a href="#tab3">Transport</a></li>
       <li><a href="#tab4">Education</a></li>
       <li><a href="#tab5">Housing</a></li>   
   </ul>

</div>

<div id="featuredCategories" class="featured-categories">

    <div class="tab_container">


        <div class="tab_content" id="tab1">

          <?php query_posts('showposts=1&category_name=City Wide'); ?>

          <?php while (have_posts()) : the_post(); ?>

            <div class="featured-post">

                <?php
                $category_id = get_cat_ID( 'City Wide' );
                
                $category_link = get_category_link( $category_id );
                ?>
                <h3 class="title"><a href="<?php echo $category_link; ?>"><?php single_cat_title(); ?></a></h3>

                <div class="cover">
                    <a title="<?php the_title(); ?>" rel="bookmark" href="#">
                      <?php $cti = catch_that_image(); if(isset($cti)){ ?>
                      <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=240&amp;w=360&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
                      <?php } else {} ?>
                  </a>
              </div> 

              <h2 class="featured-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>

              <?php the_excerpt('strip_tags','<p>'); ?>

          </div>

      <?php endwhile; ?>

      <?php query_posts('showposts=5&category_name=City Wide&offset=1'); ?>

      <div class="featured-categories-posts">

        <h4 class="featured-categories-title">More in <?php single_cat_title(); ?> </h4>

        <?php while (have_posts()) : the_post(); ?>            

            <div class="post">


                <div class="cover">
                    <a title="<?php the_title(); ?>" rel="bookmark" href="#">
                      <?php $cti = catch_that_image(); if(isset($cti)){ ?>
                      <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=60&amp;w=60&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
                      <?php } else {} ?>
                  </a>
              </div> 

              <h2 class="featured-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>

              <?php the_excerpt('strip_tags','<p></p>'); ?>

          </div>
      <?php endwhile; ?>

      <a rel="nofollow" class="readmore" href="<?php echo $category_link; ?>">More in <?php single_cat_title(); ?> &raquo;</a>

  </div>

</div> <!-- City Wide -->

<div class="tab_content" id="tab2">

  <?php query_posts('showposts=1&category_name=Health'); ?>

  <?php while (have_posts()) : the_post(); ?>

    <div class="featured-post">

       <?php
       $category_id = get_cat_ID( 'Health' );

       $category_link = get_category_link( $category_id );
       ?>

       <h3 class="title"><a href="<?php echo $category_link; ?>"><?php single_cat_title(); ?></a></h3>

       <div class="cover">
        <a title="<?php the_title(); ?>" rel="bookmark" href="#">
          <?php $cti = catch_that_image(); if(isset($cti)){ ?>
          <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=240&amp;w=360&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
          <?php } else {} ?>
      </a>
  </div> 

  <h2 class="featured-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>

  <?php the_excerpt('strip_tags','<p>'); ?>

</div>

<?php endwhile; ?>

<?php query_posts('showposts=5&category_name=Health&offset=1'); ?>

<div class="featured-categories-posts">

    <h4 class="featured-categories-title">More in <?php single_cat_title(); ?> </h4>

    <?php while (have_posts()) : the_post(); ?>            

        <div class="post">


            <div class="cover">
                <a title="<?php the_title(); ?>" rel="bookmark" href="#">
                  <?php $cti = catch_that_image(); if(isset($cti)){ ?>
                  <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=60&amp;w=60&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
                  <?php } else {} ?>
              </a>
          </div> 

          <h2 class="featured-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>

          <?php the_excerpt('strip_tags','<p></p>'); ?>

      </div>
  <?php endwhile; ?>

  <?php
  $category_id = get_cat_ID( 'Health' );

  $category_link = get_category_link( $category_id );
  ?>

  <a rel="nofollow" class="readmore" href="<?php echo $category_link; ?>">More in <?php single_cat_title(); ?> &raquo;</a>

</div>

</div> <!-- Health -->

<div class="tab_content" id="tab3">

  <?php query_posts('showposts=1&category_name=Transport'); ?>

  <?php while (have_posts()) : the_post(); ?>

    <div class="featured-post">

        <?php
        $category_id = get_cat_ID( 'Transport' );

        $category_link = get_category_link( $category_id );
        ?>
        <h3 class="title"><a href="<?php echo $category_link; ?>"><?php single_cat_title(); ?></a></h3>

        <div class="cover">
            <a title="<?php the_title(); ?>" rel="bookmark" href="#">
              <?php $cti = catch_that_image(); if(isset($cti)){ ?>
              <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=240&amp;w=360&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
              <?php } else {} ?>
          </a>
      </div> 

      <h2 class="featured-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>

      <?php the_excerpt('strip_tags','<p>'); ?>

  </div>

<?php endwhile; ?>

<?php query_posts('showposts=5&category_name=Transport&offset=1'); ?>

<div class="featured-categories-posts">

    <h4 class="featured-categories-title">More in <?php single_cat_title(); ?> </h4>

    <?php while (have_posts()) : the_post(); ?>            

        <div class="post">


            <div class="cover">
                <a title="<?php the_title(); ?>" rel="bookmark" href="#">
                  <?php $cti = catch_that_image(); if(isset($cti)){ ?>
                  <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=60&amp;w=60&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
                  <?php } else {} ?>
              </a>
          </div> 

          <h2 class="featured-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>

          <?php the_excerpt('strip_tags','<p></p>'); ?>

      </div>
  <?php endwhile; ?>

  <?php
  $category_id = get_cat_ID( 'Transport' );

  $category_link = get_category_link( $category_id );
  ?>

  <a rel="nofollow" class="readmore" href="<?php echo $category_link; ?>">More in <?php single_cat_title(); ?> &raquo;</a>

</div>

</div> <!-- Transport -->

<div class="tab_content" id="tab4">

  <?php query_posts('showposts=1&category_name=Education'); ?>

  <?php while (have_posts()) : the_post(); ?>

    <div class="featured-post">

        <?php
        $category_id = get_cat_ID( 'Education' );

        $category_link = get_category_link( $category_id );
        ?>

        <h3 class="title"><a href="<?php echo $category_link; ?>"><?php single_cat_title(); ?></a></h3>

        <div class="cover">
            <a title="<?php the_title(); ?>" rel="bookmark" href="#">
              <?php $cti = catch_that_image(); if(isset($cti)){ ?>
              <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=240&amp;w=360&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
              <?php } else {} ?>
          </a>
      </div> 

      <h2 class="featured-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>

      <?php the_excerpt('strip_tags','<p>'); ?>

  </div>

<?php endwhile; ?>

<?php query_posts('showposts=5&category_name=Education&offset=1'); ?>

<div class="featured-categories-posts">

    <h4 class="featured-categories-title">More in <?php single_cat_title(); ?> </h4>

    <?php while (have_posts()) : the_post(); ?>            

        <div class="post">


            <div class="cover">
                <a title="<?php the_title(); ?>" rel="bookmark" href="#">
                  <?php $cti = catch_that_image(); if(isset($cti)){ ?>
                  <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=60&amp;w=60&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
                  <?php } else {} ?>
              </a>
          </div> 

          <h2 class="featured-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>

          <?php the_excerpt('strip_tags','<p></p>'); ?>

      </div>
  <?php endwhile; ?>

  <?php
  $category_id = get_cat_ID( 'Education' );

  $category_link = get_category_link( $category_id );
  ?>

  <a rel="nofollow" class="readmore" href="<?php echo $category_link; ?>">More in <?php single_cat_title(); ?> &raquo;</a>

</div>

</div> <!-- Education -->

<div class="tab_content" id="tab5">

  <?php query_posts('showposts=1&category_name=Housing'); ?>

  <?php while (have_posts()) : the_post(); ?>

    <div class="featured-post">

        <?php
        $category_id = get_cat_ID( 'Housing' );

        $category_link = get_category_link( $category_id );
        ?>

        <h3 class="title"><a href="<?php echo $category_link; ?>"><?php single_cat_title(); ?></a></h3>

        <div class="cover">
            <a title="<?php the_title(); ?>" rel="bookmark" href="#">
              <?php $cti = catch_that_image(); if(isset($cti)){ ?>
              <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=240&amp;w=360&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
              <?php } else {} ?>
          </a>
      </div> 

      <h2 class="featured-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>

      <?php the_excerpt('strip_tags','<p>'); ?>

  </div>

<?php endwhile; ?>

<?php query_posts('showposts=5&category_name=Housing&offset=1'); ?>

<div class="featured-categories-posts">

    <h4 class="featured-categories-title">More in <?php single_cat_title(); ?> </h4>

    <?php while (have_posts()) : the_post(); ?>            

        <div class="post">


            <div class="cover">
                <a title="<?php the_title(); ?>" rel="bookmark" href="#">
                  <?php $cti = catch_that_image(); if(isset($cti)){ ?>
                  <img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&amp;h=60&amp;w=60&amp;zc=1" alt="Link to <?php the_title(); ?>" class="thumbnail"/>
                  <?php } else {} ?>
              </a>
          </div> 

          <h2 class="featured-post-title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title_attribute(); ?></a></h2>

          <?php the_excerpt('strip_tags','<p></p>'); ?>

      </div>
  <?php endwhile; ?>

  <?php
  $category_id = get_cat_ID( 'Housing' );

  $category_link = get_category_link( $category_id );
  ?>

  <a rel="nofollow" class="readmore" href="<?php echo $category_link; ?>">More in <?php single_cat_title(); ?> &raquo;</a>

</div>

</div> <!-- Housing -->

</div>
</div>