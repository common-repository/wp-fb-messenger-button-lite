<?php
defined('ABSPATH') or die('No script kiddies please!');
$wpfbmb_settings = get_option('wpfbmb_settings');
?>
<div class="clearfix wpfbmb-messenger-settings">
    <div class="floating-menu-tab">
        <ul class="wpfbmb-shortcode-setting-tab">
            <li data-menu="wpfbmb-display-settings" class="wpfbmb-shortcode-tab-tigger wpfbmb-active">
                <span class="dashicons dashicons-screenoptions"></span>
                <?php _e('Display Settings', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-template-settings" class="wpfbmb-shortcode-tab-tigger">
                <span class="dashicons dashicons-images-alt"></span>
                <?php _e('Templates', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-color-settings" class="wpfbmb-shortcode-tab-tigger">
                <span class="dashicons dashicons-admin-post"></span>
                <?php _e('Color Settings', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-animation-settings" class="wpfbmb-shortcode-tab-tigger">
                <span class="dashicons dashicons-admin-customizer"></span>
                <?php _e('Animation Settings', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-position-settings" class="wpfbmb-shortcode-tab-tigger">
                <span class="dashicons dashicons-welcome-write-blog"></span>
                <?php _e('Button Position', WPFBMB_TD); ?>
            </li>
        </ul>
    </div>
    <div class="wpfbmb-shortcode-details">
        <div class="wpfbmb-field">
            <div class="wpfbmb-shortcode">
                <?php _e('You can copy generated shortcode anywhere either post, page or widget.', WPFBMB_TD); ?>
                <textarea class="wpfbmb_short_codeDisp"  name="wpfbmb_settings[generate_shortcode]" id="wpfbmb_generated_shortcode" readonly="readonly" ><?php
                    if (isset($wpfbmb_settings['generate_shortcode'])) {
                        echo str_replace('\\', '', ($wpfbmb_settings['generate_shortcode']));
                    }
                    ?></textarea>
                <span style="display:none;" class="wpfbmb_copied-msg"> Shortcode copied in clipboard </span>
            </div>
        </div>
        <div class="wpfbmb-field-wrap">
            <input type="button"  class="wpfbmb-shortcode-button" value="<?php _e(' Click Me To Generate Shortcode', WPFBMB_TD); ?>"/>
        </div>
        <div class ="wpfbmb-shortcode-settings-wrap wpfbmb-shortcode-active-container" data-menu-ref="wpfbmb-display-settings">
            <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/shortcode-generator/display-settings.php'); ?>
        </div>
        <div class ="wpfbmb-shortcode-settings-wrap" data-menu-ref="wpfbmb-template-settings">
            <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/shortcode-generator/template-settings.php'); ?>
        </div>
        <div class ="wpfbmb-shortcode-settings-wrap" data-menu-ref="wpfbmb-color-settings">
            <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/shortcode-generator/color-settings.php'); ?>
        </div>
        <div class ="wpfbmb-shortcode-settings-wrap" data-menu-ref="wpfbmb-animation-settings">
            <?php require_once(wpfbmb_PLUGIN_PATH . 'inc/backend/shortcode-generator/animation-settings.php'); ?>
        </div>
        <div class ="wpfbmb-shortcode-settings-wrap " data-menu-ref="wpfbmb-position-settings">
            <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/shortcode-generator/position-settings.php'); ?>
        </div>
    </div>
</div>


