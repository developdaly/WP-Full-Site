<?php

add_action( 'admin_menu', 'wpfullsite_create_meta_box' );
add_action( 'hybrid_update_settings_page', 'save_wpfullsite_meta_box' );

function wpfullsite_create_meta_box() {
	add_meta_box( "wpfullsite", __('WP Full Site', 'wpfullsite'), 'wpfullsite_meta_box_callback', 'appearance_page_theme-settings', 'normal', 'high' );
}

function wpfullsite_meta_box_callback() {
	$options = get_option( 'wpfullsite_theme_settings' ); ?>

	<!-- Security! Very important! -->
	<input type="hidden" name="wpfullsite_meta_box_nonce" value="<?php echo wp_create_nonce( basename( __FILE__ ) ); ?>" />

	<table class="form-table">
		<tr>
			<th><label for="phone_number"><?php _e('Phone Number:', 'wpfullsite'); ?></label></th>
			<td>
				<input id="phone_number" name="phone_number" value="<?php echo $options['phone_number']; ?>" size="30" />
				<br />
				<?php _e('Your public phone number.', 'wpfullsite'); ?>
			</td>
		</tr>
		<tr>
			<th><label for="email_address"><?php _e('Email Address:', 'wpfullsite'); ?></label></th>
			<td>
				<input id="email_address" name="email_address" value="<?php echo $options['email_address']; ?>" size="30" />
				<br />
				<?php _e('Your public email address.', 'wpfullsite'); ?>
			</td>
		</tr>
		<tr>
			<th><label for="call_to_action"><?php _e('Call to Action:', 'wpfullsite'); ?></label></th>
			<td>
				<input id="call_to_action" name="call_to_action" value="<?php echo $options['call_to_action']; ?>" size="30" />
				<br />
				<?php _e('Use this to grab the attention of your visitors and get them to do something!', 'wpfullsite'); ?>
			</td>
		</tr>
	</table><!-- .form-table --><?php
}

function save_wpfullsite_meta_box() {

	/* Verify the nonce, so we know this is secure. */
	if ( !wp_verify_nonce( $_POST['wpfullsite_meta_box_nonce'], basename( __FILE__ ) ) )
		return false;

	$options = get_option( 'wpfullsite_theme_settings' );

	$options['phone_number'] = strip_tags( $_POST['phone_number'] ); // Do any type of escaping you feel necessary.
	$options['email_address'] = strip_tags( $_POST['email_address'] ); // Do any type of escaping you feel necessary.
	$options['call_to_action'] = strip_tags( $_POST['call_to_action'] ); // Do any type of escaping you feel necessary.

	$updated = update_option( 'wpfullsite_theme_settings', $options );
}
?>