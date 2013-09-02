<?php

/* Load theme textdomain */
	load_theme_textdomain( 'wpfullsite', get_stylesheet_directory() );
	
/* Load admin files into the backend. */
	if ( is_admin() )
		require_once( trailingslashit( get_stylesheet_directory() ) . 'library/admin/wpfullsite-settings.php' );

/* Inserts the Hero message before the container. */
	add_action ( 'hybrid_before_container', 'insert_hero', 11 );

/* Inserts contact info at the end of the header. */
	add_filter ( 'hybrid_header', 'insert_contact_info', 11 );

/* Inserts the credit link into at the end of the footer. */
	add_filter ( 'hybrid_footer', 'child_credit', 11 );

function insert_contact_info() {
	$hybrid_settings = get_option( 'wpfullsite_theme_settings' );
	
	echo '<div id="contact-info">';
	if ( $hybrid_settings['phone_number'] ) {
		echo '<div class="phone-number">';
		echo do_shortcode( stripslashes( $hybrid_settings['phone_number'] ) );
		echo '</div>';
	}
	if ( $hybrid_settings['email_address'] ) {
		echo '<div class="email-address">';
		echo '<a href="mailto:' . do_shortcode( stripslashes( $hybrid_settings['email_address'] ) ) . '">' . do_shortcode( stripslashes( $hybrid_settings['email_address'] ) ) . '</a>';
		echo '</div>';
	}
	echo '</div>';
}

function insert_hero() {
	$hybrid_settings = get_option( 'wpfullsite_theme_settings' );
	if ( $hybrid_settings['call_to_action'] ) {
		echo '<div id="hero">';
		echo '<div id="call-to-action">' . do_shortcode( stripslashes( $hybrid_settings['call_to_action'] ) ) . '</div>';
		echo '</div>';
	}
}

function child_credit() {
	echo '<p class="child-credit">';
	echo do_shortcode('[child-link]');
	echo ' WordPress Theme</p>';
}
	
?>