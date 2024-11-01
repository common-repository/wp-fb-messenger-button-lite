<?php defined('ABSPATH') or die('No script kiddies please!'); ?>

<div class="wrap wpfbmb-wrap">
    <div class="wpfbmb-content-wrap">
        <div class="wpfbmb-template-setting">
            <div class="wpfbmb-field-wrap">
                <label><?php _e('Template Layout', WPFBMB_TD); ?></label>
                <div class="wpfbmb-field ">
                    <select name="wpfbmb_settings[button_template]" id="wpfbmb-button-template-floating" >
                        <?php for ($k = 1; $k <= 4; $k ++) { ?>
                            <option id="wpfbmb-temp-<?php echo $k; ?>" value="template-<?php echo $k; ?>" <?php if (!empty($wpfbmb_settings['button_template'])) selected($wpfbmb_settings['button_template'], 'template-' . $k); ?>><?php _e('Template ', WPFBMB_TD) ?><?php echo $k; ?>
                            </option>
                        <?php } ?>
                    </select>
                    <div class="wpfbmb-floating-demo wpfbmb-preview-image">
                        <?php
                        for ($cnt = 1; $cnt <= 4; $cnt ++) {
                            if (isset($wpfbmb_settings['wpfbmb_button_template'])) {
                                $option_value = $wpfbmb_settings['wpfbmb_button_template'];
                                $exploded_array = explode('-', $option_value);
                                $cnt_num = $exploded_array[1];
                                $style= ($cnt != $cnt_num) ? "style='display:none;'" : "style='display:block;'";
                            }
                            ?>
                            <div class="wpfbmb-floating-common" id="wpfbmb-floating-demo-<?php echo $cnt; ?>" <?php if (isset($style)) echo $style; ?>>
                                <div class="wpfbmb-border-design">
                                    <img src="<?php echo esc_attr(wpfbmb_IMG_DIR) . '/button/' . 'template-' . $cnt . '.png' ?>"/>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>