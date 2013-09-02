<?php
/*
Template Name: Links
*/
?>

<?php get_header(); ?>

	<div id="bd">
		<div id="yui-main"> 
			<div class="yui-b">

				<h2>Links:</h2>
				<ul>
					<?php wp_list_bookmarks(); ?>
				</ul>
			
			</div>

		<?php get_sidebar(); ?>
	
	</div>

<?php get_footer(); ?>