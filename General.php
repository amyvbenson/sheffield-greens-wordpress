<?php
/*
Template Name: Council Election results 2010
*/
?>

<?php get_header(); ?>

<div id="main-container">
		<div id="container">
        
			<div id="post">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div id="post-<?php the_ID(); ?>">

<?php $parent = $post->ID; ?>

<h1><?php the_title(); ?></h1>

<div class="page">
<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

</div>

<?php endwhile; endif; ?>

</div>

<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>	

			</div><!-- #post -->
            
            <div id="sidebar">
            	<?php get_sidebar(); ?>
            </div><!-- #sidebar -->

		</div><!-- #container -->
</div>
</div>
<?php get_footer(); ?>
</body>
</html>