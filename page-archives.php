<?php get_header(); ?>

<div id="main-container">

	<div id="container">
		
		<div class="arclist">
			
			<div class="arclist_fl col-thirds">
				
				<h2>ARCHIVES BY CATEGORY</h2>
				
				<ul>
					<?php wp_list_categories('title_li=&hierarchical=0&show_count=0') ?>	
				</ul>				
				
			</div><!--/arclist-->
			
			<div class="arclist_fr col-thirds">
				
				<h2>ARCHIVES BY DATE</h2>
				<ul>
					<?php wp_get_archives('type=monthly&show_post_count=0') ?>	
				</ul>				
				
			</div><!--/arclist-->
			
			<?php if (function_exists('wp_tag_cloud')) { ?>
			
			<div id="archivebox" class="col-thirds">
				
				<h2>POPULAR TAGS</h2>

				<ul class="list1">
					<li><?php wp_tag_cloud('smallest=10&largest=18'); ?></li>
				</ul>						        
				
			</div><!--/archivebox-->
			
			<?php } ?>		

		</div>   
		
	</div> <!-- /container -->
	
</div> <!-- /main-container -->

<?php get_footer(); ?>