<?php get_header(); ?>

		<div id="yui-main"> 
			<div class="yui-b">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<div class="post" id="post-<?php the_ID(); ?>">
					<div <?php post_class() ?>>
						<h1><?php the_title(); ?></h1>
						<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
		
						<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>	
					</div>
				</div>
				<?php endwhile; endif; ?>
				
			</div>
	
		</div>
	
		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>