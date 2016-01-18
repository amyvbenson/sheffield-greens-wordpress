<?php
	if (function_exists('stats_get_csv')) {
		$top_posts = stats_get_csv ('postviews', 'days=7&limit=8');
		
		if (count($top_posts) > 0) {
			echo '<ol>';
			foreach ($top_posts as $p) {
?>
				<li><a href="<?php echo $p['post_permalink']; ?>"><?php echo $p['post_title']; ?></a></li>
<?php
			}
			echo '</ol>';
		}

	}
?>