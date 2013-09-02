<?php get_header(); ?>

	<div id="bd">
		<div id="yui-main"> 
			<div class="yui-b">
				
				<div id="rss"><a href="<?php bloginfo('rss2_url'); ?>">Subscribe</a></div>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
						<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
						<div class="entry">
							<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
							<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>
			
							<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
			
							<div class="navigation">
								<div class="alignleft"><?php previous_image_link() ?></div>
								<div class="alignright"><?php next_image_link() ?></div>
							</div>
							<br class="clear" />
			
							<?php comments_template(); ?>
							
						</div>
						
					</div>
					
				<?php endwhile; else: ?>
			
					<p>Sorry, no posts matched your criteria.</p>
			
				<?php endif; ?>

				</div>
			
			</div>
	
		<?php get_sidebar(); ?>
	
	</div>

<?php get_footer(); ?>
