<?php defined('ABSPATH') or die('No script kiddies please!'); ?>
<div class="wpfbmb-content-wrap">
    <div class="wpfbmb-field-wrap">
        <label><?php _e('Template Layout', WPFBMB_TD); ?></label>
        <div class="wpfbmb-field wpfbmb-border-design">
            <select name="wpfbmb_button_template" id="wpfbmb-button-template" >
                <?php for ($k = 1; $k <= 4; $k ++) { ?>
                    <option id="wpfbmb-temp-<?php echo $k; ?>" value="template-<?php echo $k; ?>" <?php if (!empty($wpfbmb_settings['wpfbmb_button_template'])) selected($wpfbmb_settings['wpfbmb_button_template'], 'template-' . $k); ?>><?php _e('Template ', WPFBMB_TD) ?><?php echo $k; ?>
                        
                    </option>
                <?php } ?>    
            </select>
            <div class="menu-template">
                <div class="wpfbmb-border-design">
                    <img src="<?php echo esc_attr(wpfbmb_IMG_DIR) . '/button/' . 'template-1.png' ?>"/>
                </div>
            </div>
            <div class="wpfbmb-grid-demo wpfbmb-preview-image">
                <?php
                for ($cnt = 1; $cnt <= 4; $cnt ++) {
                    if (isset($wpfbmb_settings['wpfbmb_button_template'])) {
                        $option_value = $wpfbmb_settings['wpfbmb_button_template'];
                        $exploed_array = explode('-', $option_value);
                        $cnt_num = $exploed_array[1];
                        $style= ($cnt != $cnt_num) ? "style='display:none;'" :'' ;
                    }
                    ?>
                    <div class="wpfbmb-grid-common" id="wpfbmb-grid-demo-<?php echo $cnt; ?>" <?php if (isset($style)) echo $style; ?> >
                        <div class="wpfbmb-border-design">
                            <img src="<?php echo esc_attr(wpfbmb_IMG_DIR) . '/button/' . 'template-' . $cnt . '.png' ?>"/>
                        </div>
                    </div>
                    <?php 
                } ?>
            </div>
        </div>
    </div>
</div>
