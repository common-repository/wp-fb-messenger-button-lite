<?php defined('ABSPATH') or die('No script kiddies please!'); ?>

<div class="wrap wpfbmb-wrap">
    <div class="wpfbmb-content-wrap">
        <div class="wpfbmb-color-setting">
            <div class="wpfbmb-button-text-color">
                <div class="wpfbmb-field-wrap">
                    <label><?php _e('Button Color', WPFBMB_TD) ?></label>
                    <div class="wpfbmb-field">
                        <input type="text" name="wpfbmb_settings[button_color]" value="<?php if(isset($wpfbmb_settings['button_color']) && $wpfbmb_settings['button_color'] != ''){ echo esc_attr($wpfbmb_settings['button_color']); }  ?>"
                               id="wpfbmb_button_color" class="cpa-color-picker"/>
                    </div>
                </div>
                <div class="wpfbmb-field-wrap">
                    <label><?php _e('Text Color', WPFBMB_TD) ?></label>
                    <div class="wpfbmb-field">
                        <input type="text" name="wpfbmb_settings[text_color]" value="<?php if(isset($wpfbmb_settings['text_color']) && $wpfbmb_settings['text_color'] != ''){ echo esc_attr($wpfbmb_settings['text_color']); }  ?>" id="wpfbmb_text_color" class="cpa-color-picker" />
                    </div>
                </div>
            </div>
            <div class="wpfbmb-field-wrap">
                <label><?php _e('Icon Background Color', WPFBMB_TD) ?></label>
                <div class="wpfbmb-field">
                    <input type="text" name="wpfbmb_settings[icon_background_color]" value="<?php if(isset($wpfbmb_settings['icon_background_color']) && $wpfbmb_settings['icon_background_color'] != ''){ echo esc_attr($wpfbmb_settings['icon_background_color']); }  ?>"id="wpfbmb_icon_background_color" class="cpa-color-picker" />
                </div>
            </div>
            <div class="wpfbmb-field-wrap">
                <label><?php _e('Icon Color', WPFBMB_TD); ?></label>
                <div class="wpfbmb-field">
                    <input type="text" id="wpfbmb_icon_color" value="<?php if(isset($wpfbmb_settings['icon_color']) && $wpfbmb_settings['icon_color'] != ''){ echo esc_attr($wpfbmb_settings['icon_color']); }  ?>" name="wpfbmb_settings[icon_color]" class="cpa-color-picker" />
                </div>
            </div>
        </div>
    </div>
</div>