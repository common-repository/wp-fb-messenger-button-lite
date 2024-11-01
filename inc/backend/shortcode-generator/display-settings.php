<?php defined('ABSPATH') or die('No script kiddies please!'); ?>
<div class="wpfbmb-content-wrap">
    <div class="wpfbmb-field-wrap">
        <label for="wpfbmb_enable_desktop_button_shortcode"><?php _e('Enable In Desktop', WPFBMB_TD); ?></label>
        <div class="wpfbmb-field">
            <div class="wpfbmb-checkbox-wrap">
                <input type="checkbox" name="wpfbmb_settings[enable_desktop_button]" id='wpfbmb_enable_desktop_button_shortcode' value="<?php
                    if (isset($wpfbmb_settings['enable_desktop_button'])) {
                        echo esc_attr($wpfbmb_settings['enable_desktop_button']);
                    } else {
                        echo 'hide';
                    }
                    ?>" <?php
                           if (isset($wpfbmb_settings['enable_desktop_button']) &&
                                   $wpfbmb_settings['enable_desktop_button'] == 'show') {
                               ?> checked="checked" <?php } ?>/>
                <label for="wpfbmb_enable_desktop_button_shortcode"></label>
            </div>
            <p class="description"><?php _e('Please enable to show in desktop.', WPFBMB_TD) ?></p>
        </div>
    </div>
    <div class="wpfbmb-field-wrap">
        <label for="wpfbmb_enable_mobile_button_shortcode"><?php _e('Enable In Mobile', WPFBMB_TD); ?></label>
        <div class="wpfbmb-field">
            <div class="wpfbmb-checkbox-wrap">
                <input type="checkbox" name="wpfbmb_settings[enable_mobile_button]" id='wpfbmb_enable_mobile_button_shortcode' value="<?php
                    if (isset($wpfbmb_settings['enable_mobile_button'])) {
                        echo esc_attr($wpfbmb_settings['enable_mobile_button']);
                    } else {
                        echo 'hide';
                    }
                    ?>" <?php
                           if (isset($wpfbmb_settings['enable_mobile_button']) &&
                                   $wpfbmb_settings['enable_mobile_button'] == 'show') {
                               ?> checked="checked" <?php } ?>/>
                <label for="wpfbmb_enable_mobile_button_shortcode"></label>
            </div>
            <p class="description"><?php _e('Please enable to show in mobile.', WPFBMB_TD) ?></p>
        </div>
    </div>
    <div class="wpfbmb-field-wrap">
        <label for="wpfbmb_button_text_enable_shortcode"><?php _e('Add Button Text', WPFBMB_TD); ?></label>
        <div class="wpfbmb-field">
            <div class="wpfbmb-checkbox-wrap">
                <input type="checkbox" name="wpfbmb_settings[button_text_enable]" id='wpfbmb_button_text_enable_shortcode' value="<?php
                    if (isset($wpfbmb_settings['button_text_enable'])) {
                        echo esc_attr($wpfbmb_settings['button_text_enable']);
                    } else {
                        echo 'hide';
                    }
                    ?>" <?php
                           if (isset($wpfbmb_settings['button_text_enable']) &&
                                   $wpfbmb_settings['button_text_enable'] == 'show') {
                               ?> checked="checked" <?php } ?>/>
                <label for="wpfbmb_button_text_enable_shortcode"></label>
            </div>
            <p class="description"><?php _e('Please enable to display text in mesenger buttons.', WPFBMB_TD) ?></p>
            </label>
        </div>
    </div>
    <div id="wpfbmb_show_button_text" >
        <div class="wpfbmb-field-wrap">
            <label for="wpfbmb_button_name_shortcode"><?php _e( 'Button Text', WPFBMB_TD ); ?></label>
            <div class="wpfbmb-field">
                <input type="text" name="wpfbmb_settings[button_name]" value="Messenger" id="wpfbmb_button_name_shortcode"  placeholder="Insert Button Text"/>
                <p class="description"><?php _e('Please add text on button to display.', WPFBMB_TD) ?></p>
            </div>
        </div>
        <div class="wpfbmb-field-wrap">
            <label for="wpfbmb_button_text_position_shortcode"><?php _e( 'Button Text Align', WPFBMB_TD ); ?></label>
            <div class="wpfbmb-field">
                <label><input type="radio" name="button_text_align" id="wpfbmb_button_text_position_shortcode" value="left"><?php _e('Left', WPFBMB_TD); ?></label>
                <lable><input type="radio" name="button_text_align" id="wpfbmb_button_text_position_shortcode" value="right"  checked="checked" /><?php _e('Right', WPFBMB_TD); ?></lable><br>
            </div>
        </div>
    </div>
    <div class="wpfbmb-field-wrap ">
        <label for="wpfbmb_enable_sticky_button_shortcode"><?php _e('Sticky Button', WPFBMB_TD); ?></label>
        <div class="wpfbmb-field">
            <div class="wpfbmb-checkbox-wrap">
                <input type="checkbox" name="wpfbmb_settings[enable_sticky_button]" class="wpfbmb_enable_sticky_button_shortcode" id='wpfbmb_enable_sticky_button_shortcode' value="<?php
                    if (isset($wpfbmb_settings['enable_sticky_button'])) {
                        echo esc_attr($wpfbmb_settings['enable_sticky_button']);
                    } else {
                        echo 'hide';
                    }
                    ?>" <?php
                           if (isset($wpfbmb_settings['enable_sticky_button']) &&
                                   $wpfbmb_settings['enable_sticky_button'] == 'show') {
                               ?> checked="checked" <?php } ?>/>
                <label for="wpfbmb_enable_sticky_button_shortcode"></label>
                <p class="description"><?php _e('Please check to enable sticky.', WPFBMB_TD) ?></p>
            </div>
        </div>
    </div>
</div>