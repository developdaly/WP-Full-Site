<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

		<div id="yui-main"> 
			<div class="yui-b">
				
				<div class="hentry">
					
					<h1>Portfolio</h1>

					<?php $my_query = new WP_Query('category_name=portfolio&showposts=10');
					while ($my_query->have_posts()) : $my_query->the_post();
					$do_not_duplicate = $post->ID; ?>
					
						<div class="contentdiv">
							<?php get_the_image('default_size=full&image_class=framing aligncenter&width=400&height=240'); ?>
						</div>
						
					<?php endwhile; ?>
				
				</div>
				
			</div>
	
		</div>
	
		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>