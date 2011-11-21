<?php

add_action( 'admin_init', 'theme_options_init' );
add_action( 'admin_menu', 'theme_options_add_page' );

/**
 * Init plugin options to white list our options
 */
function theme_options_init(){
	register_setting( 'simple_options', 'simple_theme_options', 'theme_options_validate' );
}

/**
 * Load up the menu page
 */
function theme_options_add_page() {
	add_theme_page( __( 'Simple Theme Options', 'simpletheme' ), __( 'Simple Theme Options', 'simpletheme' ), 'edit_theme_options', 'theme_options', 'theme_options_do_page' );
}
/**
 * Create the options page
 */
function theme_options_do_page() {
	if ( ! isset( $_REQUEST['settings-updated'] ) )
		$_REQUEST['settings-updated'] = false;
	?>
	<div class="wrap">
		<?php screen_icon(); echo "<h2>" . get_current_theme() . __( ' Theme Options', 'simpletheme' ) . "</h2>"; ?>

		<?php if ( false !== $_REQUEST['settings-updated'] ) : ?>
      <div class="updated fade"><p><strong><?php _e( 'Options saved', 'simpletheme' ); ?></strong></p></div>
		<?php endif; ?>

		<form method="post" action="options.php">
			<?php settings_fields( 'simple_options' ); ?>
			<?php $options = get_option( 'simple_theme_options' ); ?>

			<table class="form-table">
        <th><strong>Social Account</strong></th>
				<?php
				/**
				 * Twitter Account Settings
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Twitter', 'simpletheme' ); ?></th>
					<td>
						<input id="simple_theme_options[twitter]" class="regular-text" type="text" name="simple_theme_options[twitter]" value="<?php esc_attr_e( $options['twitter'] ); ?>" />
						<label class="description" for="simple_theme_options[twitter]"><?php _e( 'Input twitter account', 'simpletheme' ); ?></label>
					</td>
				</tr>
				<?php
				/**
				 * Facebook Account Settings
				 */
				?>
				<tr valign="top"><th scope="row"><?php _e( 'Facebook', 'simpletheme' ); ?></th>
					<td>
						<input id="simple_theme_options[facebook]" class="regular-text" type="text" name="simple_theme_options[facebook]" value="<?php esc_attr_e( $options['facebook'] ); ?>" />
						<label class="description" for="simple_theme_options[facebook]"><?php _e( 'Input facebook account', 'simpletheme' ); ?></label>
					</td>
				</tr>
      </table>
      </table>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e( 'Save Options', 'simpletheme' ); ?>" />
			</p>
		</form>
	</div>
	<?php
}

/**
 * Sanitize and validate input. Accepts an array, return a sanitized array.
 */
function theme_options_validate( $input ) {
	// Say our text option must be safe text with no HTML tags
	$input['twitter'] = wp_filter_nohtml_kses( $input['twitter'] );
	return $input;
}

// adapted from http://planetozh.com/blog/2009/05/handling-plugins-options-in-wordpress-28-with-register_setting/
