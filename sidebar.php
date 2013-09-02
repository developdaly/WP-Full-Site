<div id="sidebar" class="yui-b">
	
	<ul id="sidebar-list">

		<?php if ( is_home() || is_category() || is_single() ) { ?> 
			<li>
			
				<form method="get" class="search_form blog-search" action="http://developdaly.com/">
					<p>
						<input class="text_input" type="text" value="To search, type and hit enter" name="s" id="s" onfocus="if (this.value == 'To search, type and hit enter') {this.value = '';}" onblur="if (this.value == '') {this.value = 'To search, type and hit enter';}" />
						<input type="hidden" id="searchsubmit" value="Search" />
					</p>
				</form>
			
			</li>
	
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar 1') ) : ?>
			
			<?php endif; ?>
	
		<?php } else { ?>		
		
			<?php
				if($post->post_parent)
				$children = wp_list_pages("title_li=&link_before=→ &child_of=".$post->post_parent."&echo=0");
				else
				$children = wp_list_pages("depth=1&link_before=→ &title_li=&child_of=".$post->ID."&echo=0");
				if ($children) { 
			?>
			<ul id="child-pages">
				
				<?php if($post->post_parent){ } else { ?>
				
				<li class="page_item current_page_item"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				
				<?php } ?>
				
				<li class="page_item<?php if(is_page('about')){ echo ' current_page_item'; } ?>">
					<?php 
					// if there is a parent, display the link
					$parent_title = get_the_title($post->post_parent);
					if ($parent_title != the_title('','', false))
					{
					    echo ('<a href="'.get_permalink($post->post_parent)
					    .'" title="'.$parent_title.'">'.$parent_title
					    .'</a>');
					}
					?>
				</li>
		
				<?php echo $children; ?>
		
			</ul>
			<?php } ?>
		
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar New') ) : ?>
				<?php if (!is_page('contact')){ ?>
					<li>
						<div class="sidebar-title">Contact Me</div>
						<?php insert_cform('2'); ?>
						<div class="clear"></div>
					</li>
				<?php } ?>
				<li>
					<div id="hcard-Patrick-Daly" class="vcard">
						<div class="sidebar-title">Details</div>
						<img src="<?php bloginfo('template_directory'); ?>/images/person.gif" alt="Patrick Daly" />  <span class="fn">Patrick Daly</span>, <span class="org">Develop Daly</span><br />
						<img src="<?php bloginfo('template_directory'); ?>/images/mail.gif" alt="Patrick's Email Address" />  patrick@developdaly.com<br />
						<img src="<?php bloginfo('template_directory'); ?>/images/mobile.gif" alt="Patrick's Phone Number" />  <span class="tel">(940) 229-1510</span>
						<div class="remume"><img src="<?php bloginfo('template_directory'); ?>/images/document.gif" alt="Patrick's R&eacute;sum&eacute;" />  <a href="http://patrickdaly.emurse.com/">R&eacute;sum&eacute;</a></div>
					</div>
				</li>
		
			<?php endif; ?>
			
		<?php } ?>
								
	</ul>
		
</div>