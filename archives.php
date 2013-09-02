<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>

	<div id="bd">
		<div id="yui-main"> 
			<div class="yui-b">

				<?php get_search_form(); ?>
				
				<h2>Archives by Month:</h2>
				<ul>
					<?php wp_get_archives('type=monthly'); ?>
				</ul>
				
				<h2>Archives by Subject:</h2>
				<ul>
					<?php wp_list_categories(); ?>
				</ul>
			
			</div>

		<?php get_sidebar(); ?>
	
	</div>

<?php get_footer(); ?>
