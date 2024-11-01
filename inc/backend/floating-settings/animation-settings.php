<?php 
defined('ABSPATH') or die('No script kiddies please!');
if(!empty($wpfbmb_settings)){
    $user_name = $wpfbmb_settings['user_name'];
}
?>
<div class="wrap wpfbmb-wrap">
    <div class="wpfbmb-animation-setting">
        <div class="wpfbmb-field-wrap ">
            <label><?php _e('Animation Template', WPFBMB_TD); ?></label>
            <div class="wpfbmb-field">
                <select  name=wpfbmb_settings[button_animation] value="<?php if (!empty($wpfbmb_settings['button_animation'])) selected($wpfbmb_settings['button_animation']); ?>" id="wpfbmb-button-animation">
                    <option value="animation-1" <?php if (isset($wpfbmb_settings['button_animation']) && $wpfbmb_settings['button_animation'] == 'animation-1') echo 'selected=="selected"'; ?>><?php _e('Pluse', WPFBMB_TD); ?></option>
                    <option value="animation-2" <?php if (isset($wpfbmb_settings['button_animation']) && $wpfbmb_settings['button_animation'] == 'animation-2') echo 'selected=="selected"'; ?> ><?php _e('Eclipse-Shadow', WPFBMB_TD); ?></option>
                    <option value="animation-3" <?php if (isset($wpfbmb_settings['button_animation']) && $wpfbmb_settings['button_animation'] == 'animation-3') echo 'selected=="selected"'; ?> ><?php _e('Drop-Shadow', WPFBMB_TD); ?></option>
                    <option value="animation-4" <?php if (isset($wpfbmb_settings['button_animation']) && $wpfbmb_settings['button_animation'] == 'animation-4') echo 'selected=="selected"'; ?>><?php _e('Wobble', WPFBMB_TD) ?></option>
                </select>
                <div class="wpfbmb-animation-effect wpfbmb-border-design">
                    <div class="wpfbmb-button-wrap <?php echo (isset($wpfbmb_settings['button_animation']) && $wpfbmb_settings['button_animation']!='' ?$wpfbmb_settings['button_animation'] : 'animation-1' ); ?> wpfbmb-button-template-1 wpfbmb-text-icon-both wpfbmb-button-postion-right wpfbmb-text-inner-wrapper">
                        <?php $button_text = "Messenger "; ?>
                        <a href="https://m.me/<?php echo esc_attr($user_name); ?>"><?php echo esc_attr($button_text); ?><i class="icon_comment_alt"></i></a>
                    </div>
                </div>
                <p class="description"><?php _e('Please hover on above button to see animation effect.', WPFBMB_TD); ?></p>
            </div>
        </div>
    </div>
</div>