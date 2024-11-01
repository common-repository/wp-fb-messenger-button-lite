<?php
defined('ABSPATH') or die('No script kiddies please!');
$wpfbmb_settings = get_option('wpfbmb_settings');
?>
<div class="wpfbmb-all-wrap">
    <div class="wpfbmb-content-wrap">
        <div class="wpfbmb-field-wrap">
            <label for="wpfbmb_user_name_general"><?php _e( 'Facebook Username', WPFBMB_TD ); ?></label>
            <div class="wpfbmb-field">
                <input type="text" id="wpfbmb_user_name_general" name="wpfbmb_settings[user_name]" value="<?php if(isset($wpfbmb_settings['user_name']) && !empty($wpfbmb_settings['user_name'])){ echo esc_attr($wpfbmb_settings['user_name']);} ?>" placeholder="<?php _e( 'Facebook Username', WPFBMB_TD ); ?>"/>
                <p class="description"><?php _e('Note: Please enter valid facebook username to connect via messenger. Also, do not put space in-between your username.', WPFBMB_TD) ?></p>

            </div>
        </div>
        <div class="wpfbmb-field-wrap">
            <div class="wpfbmb-field wpfbmb-save">
                <?php
                wp_nonce_field('wpfbmb_form_nonce', 'wpfbmb_form_nonce_field');
                ?>
                <a href="javascript:;" onclick="document.getElementById('wpbfmb-save-form').submit();"><i class="fa fa-floppy-o"></i><span><?php _e('Save', WPFBMB_TD); ?></span></a>
            </div>
        </div>
    </div>
</div>