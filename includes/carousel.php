<div id="carousel">

	<?php	
		include(TEMPLATEPATH . '/includes/version.php');
		
		$the_query = new WP_Query('cat=-10'. $ex_feat . ',-' . $ex_vid . '&showposts=' . 4 . '&orderby=post_date&order=desc');
		
		$counter = 0;
				
		while ($the_query->have_posts()) : $the_query->the_post(); $do_not_duplicate = $post->ID;
	?>
		<?php $counter++; ?>
        

<?php $cti = catch_that_image(); if(isset($cti)){ ?>	
<div class="th">
<a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><img src="<?php bloginfo('template_url'); ?>/thumb.php?src=<?php echo $cti; ?>&h=90&w=130&zc=1" alt="Link to <?php the_title(); ?>" class=""/></a>
<?php } ?>

<h3><a title="Permanent Link to <?php the_title(); ?>" href="<?php the_permalink() ?>" rel="bookmark"><?php $title = the_title('','',FALSE); echo substr($title, 0, 52); ?>...</a></h3>
</div>			
   

<?php endwhile; ?>	

</div>        