<div class="video-container">

	<div class="video-content">

		<?php query_posts('showposts=7&category_name=Video'); ?>

		<?php if (have_posts()) : ?>
			
			<?php while (have_posts()) : the_post(); ?>	
				
				<div id="video-<?php the_ID(); ?>">
					<?php the_content('Read the rest of this entry &raquo;'); ?>
				</div>

			<?php endwhile; ?>

		<?php endif; ?>

	</div>



	<div class="video-menu" id="videolist">

		<h2>Recent Videos</h2>

		<?php query_posts('showposts=7&category_name=Video'); ?>

		<?php if (have_posts()) : ?>

			<ul class="idTabs video-menu-list">

				<?php while (have_posts()) : the_post(); ?>	

					<li>&raquo;&nbsp;<a href="#video-<?php the_ID(); ?>"><?php the_title(); ?></a></li>
					
				<?php endwhile; ?>

			</ul>	

			<?php
			$category_id = get_cat_ID( 'Video' );

			$category_link = get_category_link( $category_id );
			?>

			<a rel="nofollow" class="readmore" href="<?php echo $category_link; ?>">View More <?php single_cat_title(); ?>s &raquo;</a>

		<?php endif; ?>

	</div><!--/videolist -->

</div><!--/box -->