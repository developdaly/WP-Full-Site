<?php

if ( !is_admin() ){
	
	wp_enqueue_script('contentslider', '/wp-content/themes/wpfullsite/js/contentslider.min.js');
	
}

include (TEMPLATEPATH . "/the-excerpt-reloaded.php");
include (TEMPLATEPATH . "/get_the_image.php");

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
        'before_title' => '<div class="widgettitle">',
        'after_title' => '</div>',
    ));

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Sidebar New',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="widgettitle">',
		'after_title' => '</div>',
	));	

if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Blog Bottom Right',
		'before_widget' => '',
		'after_widget' => '',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Footer 1',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="footer-title section-header ui-widget-header">',
		'after_title' => '</div>',
	));	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Footer 2',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="footer-title section-header ui-widget-header">',
		'after_title' => '</div>',
	));	
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'name' => 'Footer 3',
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<div class="footer-title section-header ui-widget-header">',
		'after_title' => '</div>',
	));	
// Clean up wp_head
// Remove Really simple discovery link
remove_action('wp_head', 'rsd_link');
// Remove Windows Live Writer link
remove_action('wp_head', 'wlwmanifest_link');
// Remove the version number
remove_action('wp_head', 'wp_generator');

// Remove curly quotes
remove_filter('the_content', 'wptexturize');
remove_filter('comment_text', 'wptexturize');

add_filter('comments_template', 'legacy_comments');

function legacy_comments($file) {
	if(!function_exists('wp_list_comments')) : // WP 2.7-only check
		$file = TEMPLATEPATH . '/legacy.comments.php';
	endif;
	return $file;
}

// add a microid to all the comments
function comment_add_microid($classes) {
	$c_email=get_comment_author_email();
	$c_url=get_comment_author_url();
	if (!empty($c_email) && !empty($c_url)) {
		$microid = 'microid-mailto+http:sha1:' . sha1(sha1('mailto:'.$c_email).sha1($c_url));
		$classes[] = $microid;
	}
	return $classes;
}

add_filter('comment_class','comment_add_microid');

// Get Recet Comments Function
function dp_recent_comments($no_comments = 10, $comment_len = 35) {
    global $wpdb;
	$request = "SELECT * FROM $wpdb->comments";
	$request .= " JOIN $wpdb->posts ON ID = comment_post_ID";
	$request .= " WHERE comment_approved = '1' AND post_status = 'publish' AND post_password =''";
	$request .= " ORDER BY comment_date DESC LIMIT $no_comments";
	$comments = $wpdb->get_results($request);
	if ($comments) {
		foreach ($comments as $comment) {
			ob_start();
			?>
				<li>
					<a href="<?php echo get_permalink( $comment->comment_post_ID ) . '#comment-' . $comment->comment_ID; ?>"><?php echo dp_get_author($comment); ?>:</a>
					<?php echo strip_tags(substr(apply_filters('get_comment_text', $comment->comment_content), 0, $comment_len)); ?>
				</li>
			<?php
			ob_end_flush();
		}
	} else {
		echo '<li>'.__('No comments', 'banago').'</li>';
	}
}
function dp_get_author($comment) {
	$author = "";
	if ( empty($comment->comment_author) )
		$author = __('Anonymous', 'banago');
	else

		$author = $comment->comment_author;
	return $author;
}?>