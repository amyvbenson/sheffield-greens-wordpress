<?php  include(TEMPLATEPATH . '/includes/header/head.php');  ?>
<body <?php body_class($class); ?>>
	<?php  include(TEMPLATEPATH . '/includes/header/header.php');  ?>

	<div class="container container--no-pad">
		<div class="page-section">
			<h1 class="post__heading">Archives</h1>

			<div class="archive-search">
				<p>Search the archives:</p>
				<?php get_search_form(); ?>
			</div>
		</div>
	</div>

	<div class="container container--no-pad">

		<div class="col-50">
			<div class="page-section">

				<h2>ARCHIVES BY CATEGORY</h2>

				<ul>
					<?php wp_list_categories('title_li=&hierarchical=0&show_count=0') ?>
				</ul>
			</div>
		</div>

		<div class="col-50">
			<div class="page-section">
				<h2>ARCHIVES BY DATE</h2>
				<ul>
					<?php wp_get_archives('type=monthly&show_post_count=0') ?>
				</ul>
			</div>
		</div>

	</div>


<?php get_footer(); ?>
</body>
</html>
