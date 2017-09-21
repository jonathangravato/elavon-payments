<?php

register_setting( 'elavon_payments_group', 'elavon_payments_merchant_id');
register_setting( 'elavon_payments_group', 'elavon_payments_user_id');
register_setting( 'elavon_payments_group', 'elavon_payments_pin');

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://tkorlando.com
 * @since      1.0.0
 *
 * @package    Elavon_Payments
 * @subpackage Elavon_Payments/admin/partials
 */
?>

<!-- This file should primarily consist of HTML with a little bit of PHP. -->

	<form method="post" action="options.php">
        <?php

        settings_fields( 'elavon_payments_group' );
        do_settings_sections( 'elavon_payments_group' );

        ?>


		<table class="form-table">

			<tr valign="top">
				<th scope="row">Merchant ID</th>
				<td><input type="text" name="elavon_payments_merchant_id" value="<?php echo get_option('elavon_payments_merchant_id'); ?>" />
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">User ID</th>
				<td><input type="text" name="elavon_payments_user_id" value="<?php echo get_option('elavon_payments_user_id'); ?>" />
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Pin</th>
				<td><input type="text" name="elavon_payments_pin" value="<?php echo get_option('elavon_payments_pin'); ?>" />
				</td>
			</tr>
		</table>

        <p class="submit">
            <input type="submit" class="button-primary"
                   value="<?php _e('Save Changes', DUPLICATE_POST_I18N_DOMAIN) ?>" />
        </p>

	</form>
