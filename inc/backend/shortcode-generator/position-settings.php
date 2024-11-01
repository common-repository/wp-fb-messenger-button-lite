<?php defined('ABSPATH') or die('No script kiddies please!'); ?>
<div class="wpfbmb-content-wrap">
    <div class="wpfbmb-field-wrap ">
        <label><?php _e('Button Position', WPFBMB_TD); ?></label>
        <div class="wpfbmb-field ">
            <select name=wpfbmb_settings[button_location_shortcode] id="wpfbmb-button-location-shortcode">
                <option data-img ='<?php echo esc_attr(wpfbmb_IMG_DIR) . '/position-1/' . 'bottom_left' . '.png' ?>' value="bottom_left" id="wpfbmb-bottom-left" ><?php _e('Bottom Left', WPFBMB_TD); ?>
                </option>
                <option data-img ='<?php echo esc_attr(wpfbmb_IMG_DIR) . '/position-1/' . 'bottom_right' . '.png' ?>' value="bottom_right" id="wpfbmb-bottom-right" ><?php _e('Bottom Right', WPFBMB_TD) ?>
                </option>
            </select>
            <div class="button-position-preview wpfbmb-border-design">
                <div class="wpfbmb-shortcode-common" id="wpfbmb-shortcode-demo-<?php echo esc_attr($wpfbmb_settings['button_location_shortcode']);?>">
                    <img src="<?php echo esc_attr(wpfbmb_IMG_DIR) . '/position-1/'. 'bottom_left.png' ?>"/>
                </div>
            </div>
        </div>
    </div>
</div>
