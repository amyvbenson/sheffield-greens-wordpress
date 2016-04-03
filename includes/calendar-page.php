<div id="widecolumn">



    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

        <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

           <h1 class="page_h1"><?php the_title(); ?> <?php edit_post_link( __( 'Edit Page','sheffieldgreens' ), '<span class="meta-sep">|</span> <span class="edit-link">', '</span>' ); ?></h1> 


            <a href="http://srgp.nationbuilder.com/calendar" class="banner-in-page">
                <h2>Get Involved</h2>
                <p>See our events page to find out how you can get involved locally</p>
            </a>

           <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:','sheffieldgreens' ), 'after' => '</div>' ) ); ?>
        </div><!-- .article -->

    </div><!-- #post-## -->

<?php endwhile; // end of the loop. ?>

</div>