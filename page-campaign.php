<?php /* Template Name: Air Quality Campaign */ ?>

<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>

<body <?php body_class($class); ?>>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8&appId=414389862924";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>

  <div class="container container--no-pad">
        
      <article class="page-section page-section--large post">
      <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
        <div class="campaign__heading">
          <h1 >
                <?php the_title(); ?> 
              </h1>
        </div>
        <div class="col-70">
          
            <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              
       
              <div class="post__body">

                <?php if (has_block( 'ctas' )) { ?>
                  <div class="campaign__ctas">
                    <?php the_block('ctas'); ?>
                  </div>
                <?php } ?>

                

                <?php if (has_block( 'key-points' )) { ?>
                  <div class="campaign__key-points">
                    <?php the_block('key-points'); ?>
                  </div>
                <?php } ?>

                <?php the_content(); ?>
               
              </div>
                     
        </div>
        </div>
        <div class="col-30">
        <a class="twitter-share-button"
        href="https://twitter.com/intent/tweet?text=I just took action on airpollution in Sheffield with @sheffieldgreens, please join me  www.sheffieldgreenparty.org.uk/airpollution&hashtags=LetSheffieldBreathe" data-size="large">
        Tweet</a>

        <div class="fb-share-button" data-href="http://sheffieldgreenparty.org.uk/airpollution" data-layout="button" data-size="large" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fsheffieldgreenparty.org.uk%2Fairpollution&amp;src=sdkpreparse">Share</a></div>

        <?php echo ('air-pollution');?>

      </div>
      <?php endwhile; ?>
      </article>
      
      
    </div>
  
  </div>
  <?php get_footer(); ?>
</body>
</html>
