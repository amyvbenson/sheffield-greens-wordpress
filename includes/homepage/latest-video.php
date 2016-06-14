<div class="page-section home-section home-section--video">
  <h2 class="home-section__heading">Latest Video</h2>

  <?php query_posts('showposts=1&category_name=Video'); ?>

  <?php if (have_posts()) : ?>
    
    <?php while (have_posts()) : the_post(); ?> 
      
      <div id="video">
        <?php the_content('Read the rest of this entry &raquo;'); ?>
      </div>

    <?php endwhile; ?>

  <?php endif; ?>
  
  <a href="/category/video" class="home-section__more-link">
    More videos
  </a>
</div>