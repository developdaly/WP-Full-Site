<?php get_header(); ?>

	<div id="yui-main"> 
		<div class="yui-b">
		
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
				<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h1><?php the_title(); ?></h1>
					<div class="postmetadata"><span class="date"><?php the_time('F jS, Y') ?></span> in <?php the_category(', '); ?> <span class="edit-post"><?php edit_post_link('Edit', ' | ', ''); ?></span></div>
					
					<div class="entry">
						
						<?php if ( in_category('portfolio') ){ ?>
							
							<div class="floatright"><?php get_the_image('default_size=thumbnail&link_to_post=false&image_class=framing'); ?></div>
							
							<p><strong>Website:</strong> <a href="<?php $key="website"; echo get_post_meta($post->ID, $key, true); ?>"><?php the_title(); ?></a></p>
							
						<?php } ?>
						
						<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>
						
						<div class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?></div>
						
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
