<?php defined('ABSPATH') or die('No script kiddies please!'); ?>

<div class="wpfbmb-content-wrap">
    <div class="wpfbmb-display setting">
        <div class="wpfbmb-field-wrap">
            <label for='wpfbmb-hide-desktop-floating'><?php _e('Enable In Desktop', WPFBMB_TD); ?></label>
            <div class="wpfbmb-field">
                <div class="wpfbmb-checkbox-wrap">
                    <input type="checkbox" class="wpfbmb-desktop wpfbmb-checkbox" id='wpfbmb-hide-desktop-floating' value="<?php
                    if (isset($wpfbmb_settings['enable_desktop'])) {
                        echo esc_attr($wpfbmb_settings['enable_desktop']);
                    } else {
                        echo 'hide';
                    }
                    ?>" name="wpfbmb_settings[enable_desktop]" <?php
                           if (isset($wpfbmb_settings['enable_desktop']) &&
                                   $wpfbmb_settings['enable_desktop'] == 'show') {
                               ?> checked="checked" <?php } ?>  id
                           ="wpfbmb-checkbox-wrap"/><label for="wpfbmb-checkbox"></label>
                </div>
                <p class="description"><?php _e('Please enable to show in desktop.', WPFBMB_TD) ?></p>
            </div>
        </div>
        <div class="wpfbmb-field-wrap">
            <label for="wpfbmb-hide-mobile-floating"><?php _e('Enable In Mobile', WPFBMB_TD); ?></label>
            <div class="wpfbmb-field">
                <div class="wpfbmb-checkbox-wrap">
                    <input type="checkbox" class="wpfbmb-mobile wpfbmb-checkbox" id='wpfbmb-hide-mobile-floating' value="<?php
                    if (isset($wpfbmb_settings['enable_mobile'])) {
                        echo esc_attr($wpfbmb_settings['enable_mobile']);
                    } else {
                        echo 'hide';
                    }
                    ?>" name="wpfbmb_settings[enable_mobile]" <?php
                           if (isset($wpfbmb_settings['enable_mobile']) &&
                                   $wpfbmb_settings['enable_mobile'] == 'show') {
                               ?> checked="checked" <?php } ?> />
                    <label for="wpfbmb-checkbox"></label>
                </div>
                <p class="description"><?php _e('Please enable to show in mobile.', WPFBMB_TD) ?></p>
            </div>
        </div>
        <div class="wpfbmb-field-wrap">
            <label for="wpfbmb_button_text_floating"><?php _e('Enable Button Text', WPFBMB_TD); ?></label>
            <div class="wpfbmb-field">
                <div class="wpfbmb-checkbox-wrap">
                    <input type="checkbox"  name="wpfbmb_settings[button_enable_text]" <?php echo (isset($wpfbmb_settings['button_enable_text'])) ? "checked='checked'" : ""; ?>  value="show" id="wpfbmb_button_text_floating"   />
                    <label for="wpfbmb-checkbox"></label>
                </div>
                <p class="description"><?php _e('Please enable to display text in mesenger buttons.', WPFBMB_TD) ?></p>
            </div>
        </div>
        <div class="wpfbmb-field-wrap">
            <label for="wpfbmb_button_text_value_floating"><?php _e( 'Button Text', WPFBMB_TD ); ?></label>
            <div class="wpfbmb-field">
                <input type="text" name="wpfbmb_settings[button_text]" value="<?php echo (isset($wpfbmb_settings['button_text'])) ? esc_attr($wpfbmb_settings['button_text']) : ''; ?>" id="wpfbmb_button_text_value_floating"  placeholder="<?php _e("Insert Button Text", WPFBMB_TD); ?>"/>
                <label for="wpfbmb_button_text_value_floating"></label>
                <p class="description"><?php _e('Please add text on button to display.', WPFBMB_TD) ?></p>
            </div>
        </div>
        <div class="wpfbmb-field-wrap ">
            <label for="wpfbmb-sticky-floating"><?php _e('Sticky Button', WPFBMB_TD); ?></label>
            <div class="wpfbmb-field">
                <div class="wpfbmb-checkbox-wrap">
                    <input type="checkbox" name="wpfbmb_settings[enable_sticky]" id='wpfbmb-sticky-floating' value="show" <?php echo (isset($wpfbmb_settings['enable_sticky'])) ? "checked='checked'" : ""; ?> />
                    <label for="wpfbmb-sticky-floating"></label>
                </div>
                <p class="description"><?php _e('Please check to enable sticky.', WPFBMB_TD) ?></p>
            </div>
        </div>
        <div class="wpfbmb-field-wrap">
            <div class="wpfbmb-field">
                <input type="hidden" name="wpfbmb_settings[button_text_position]" id="wpfbmb_button_text_position" value="right" checked="checked">
            </div>
        </div>
    </div>
</div>