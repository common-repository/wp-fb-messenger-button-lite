<?php defined('ABSPATH') or die('No script kiddies please!'); ?>

<div class="wrap wpfbmb-wrap">
    <div class="wpfbmb-content-wrap">
        <div class="wpfbmb-position-setting">
            <div class="wpfbmb-field-wrap ">
                <label><?php _e('Button Position', WPFBMB_TD); ?></label>
                <div class="wpfbmb-field ">
                    <select name=wpfbmb_settings[button_location] value="<?php if (!empty($wpfbmb_settings['button_location'])) selected($wpfbmb_settings['button_location']); ?>" id="wpfbmb-button-location">
                        <option data-img ='<?php echo esc_attr(wpfbmb_IMG_DIR) . '/position-1/' . 'bottom_left' . '.png' ?>' value="bottom_left" id="wpfbmb-bottom-left" <?php if (isset($wpfbmb_settings['button_location']) && $wpfbmb_settings['button_location'] == 'bottom_left') echo 'selected=="selected"'; ?>><?php _e('Bottom Left', WPFBMB_TD); ?></option>
                        <option data-img ='<?php echo esc_attr(wpfbmb_IMG_DIR) . '/position-1/' . 'bottom_right' . '.png' ?>' value="bottom_right" id="wpfbmb-bottom-right" <?php if (isset($wpfbmb_settings['button_location']) && $wpfbmb_settings['button_location'] == 'bottom_right') echo 'selected=="selected"'; ?>><?php _e('Bottom Right', WPFBMB_TD) ?></option>
                    </select>
                    <div class="wpfbmb-position-common" id="wpfbmb-position-demo-<?php echo esc_attr($wpfbmb_settings['button_location']); ?>" <?php echo ((isset($wpfbmb_settings['button_location']) && $wpfbmb_settings['button_location'] =='bottom_left') || !isset($wpfbmb_settings['button_location'])? "style='display:block; '":"style='display:none; '" );?>>
                        <div class="button-position-preview wpfbmb-border-design">
                            <img src="<?php echo esc_attr(wpfbmb_IMG_DIR) . '/position-1/' . 'bottom_left.png' ?>"/>
                        </div>
                    </div>
                    <div class="wpfbmb-position-common" 
                         id="wpfbmb-position-demo-<?php echo esc_attr($wpfbmb_settings['button_location']); ?>" 
                         <?php echo (isset($wpfbmb_settings['button_location']) && $wpfbmb_settings['button_location'] =='bottom_right' ? "style='display:block'":"style='display:none'" );?> >
                        <div class="button-position-preview wpfbmb-border-design">
                            <img src="<?php echo esc_attr(wpfbmb_IMG_DIR) . '/position-1/' . 'bottom_right.png' ?>"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>