<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>
	
		<div id="yui-main"> 
			<div class="yui-b">
				<h1>The Develop Daly Blog</h1>
				<div id="level-1" class="yui-g">
					<div class="highlight-box">
						<div class="highlight-box-container">
								<?php $my_query = new WP_Query('showposts=1');
								while ($my_query->have_posts()) : $my_query->the_post();
								$do_not_duplicate = $post->ID; ?>
								<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
									<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
									<div class="postmetadata"><span class="date"><?php the_time('F jS, Y') ?></span> -<span class="commentsmeta"> <?php comments_popup_link('0 <span class="commentstext">comments</span>', '1 <span class="commentstext">comment</span>', '% <span class="commentstext">comments</span>'); ?></span> <span class="edit-post"><?php edit_post_link('Edit', ' | ', ''); ?></span></div>
					
									<div class="entry">
										<div class="floatleft"><?php get_the_image('default_size=thumbnail'); ?></div>
										<?php the_excerpt_reloaded(); ?>
									</div>
	
									<div><a href="<?php the_permalink() ?>" class="more">Read More</a></div>
								</div>
								
							<?php endwhile; ?>
						</div>
					</div>
				</div>

				<div id="level-2" class="yui-g">
					<div class="yui-u first">
						<div class="highlight-box">
							<div class="highlight-box-container">
								<?php $my_query = new WP_Query('showposts=1&offset=1');
								while ($my_query->have_posts()) : $my_query->the_post();
								$do_not_duplicate = $post->ID; ?>
									<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
										<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
										<div class="postmetadata"><span class="date"><?php the_time('F jS, Y') ?></span> -<span class="commentsmeta"> <?php comments_popup_link('0 <span class="commentstext">comments</span>', '1 <span class="commentstext">comment</span>', '% <span class="commentstext">comments</span>'); ?></span> <span class="edit-post"><?php edit_post_link('Edit', ' | ', ''); ?></span></div>
						
										<div class="entry">
											<?php the_excerpt_reloaded(); ?>
										</div>
						
										<div><a href="<?php the_permalink() ?>" class="more">Read More</a></div>
									</div>
									
								<?php endwhile; ?>	
							</div>
						</div>	
					</div>
					<div class="yui-u">
						<div class="highlight-box">
							<div class="highlight-box-container">
								<?php $my_query = new WP_Query('showposts=1&offset=2');
								while ($my_query->have_posts()) : $my_query->the_post();
								$do_not_duplicate = $post->ID; ?>
									<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
										<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
										<div class="postmetadata"><span class="date"><?php the_time('F jS, Y') ?></span> -<span class="commentsmeta"> <?php comments_popup_link('0 <span class="commentstext">comments</span>', '1 <span class="commentstext">comment</span>', '% <span class="commentstext">comments</span>'); ?></span> <span class="edit-post"><?php edit_post_link('Edit', ' | ', ''); ?></span></div>
						
										<div class="entry">
											<?php the_excerpt_reloaded(); ?>
										</div>
						
										<div><a href="<?php the_permalink() ?>" class="more">Read More</a></div>
									</div>
									
								<?php endwhile; ?>	
							</div>
						</div>			
					</div>	
				</div>

				<div id="level-3" class="yui-g">
					<div class="yui-u first">
						<div class="highlight-box">
							<div class="highlight-box-container hentry">
								<h2>More Recent Posts</h2>
								<ul>
									<?php $my_query = new WP_Query('showposts=10&offset=3');
									while ($my_query->have_posts()) : $my_query->the_post();
									$do_not_duplicate = $post->ID; ?>
										<li>
											<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
												<a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a>
											</div>
										</li>
									<?php endwhile; ?>	
								</ul>
								<p><a href="http://developdaly.com/archives/">And even <strong>more posts</strong>!</a></p>
							</div>
						</div>	
					</div>
					<div class="yui-u">
						<div class="highlight-box">
							<div class="highlight-box-container hentry">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Bottom Right') ) : ?>
								<h2>Recent Comments</h2>
								<ul>
									<?php dp_recent_comments(5); ?>
								</ul>
								<?php endif; ?>
							</div>
						</div>			
					</div>	
				</div>

			</div>
	
		</div>
	
		<?php get_sidebar(); ?>
	
	</div>

<?php get_footer(); ?>
