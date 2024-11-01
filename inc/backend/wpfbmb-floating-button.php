<?php
defined('ABSPATH') or die('No script kiddies please!');
$wpfbmb_settings = get_option('wpfbmb_settings');
?>
<div class="clearfix wpfbmb-messenger-settings">
    <div class="floating-menu-tab">
        <ul class="wpfbmb-floating-setting-tab">
            <li data-menu="wpfbmb-display-settings" class="wpfbmb-floating-tab-tigger wpfbmb-active">
                <span class="dashicons dashicons-screenoptions"></span>
                <?php _e('Display Settings', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-template-settings" class="wpfbmb-floating-tab-tigger">
                <span class="dashicons dashicons-images-alt"></span>
                <?php _e('Templates', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-color-settings" class="wpfbmb-floating-tab-tigger">
                <span class="dashicons dashicons-admin-post"></span>
                <?php _e('Color Settings', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-animation-settings" class="wpfbmb-floating-tab-tigger">
                <span class="dashicons dashicons-admin-customizer"></span>
                <?php _e('Animation Settings', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-position-settings" class="wpfbmb-floating-tab-tigger">
                <span class="dashicons dashicons-filter"></span>
                <?php _e('Button Position', WPFBMB_TD); ?>
            </li>
        </ul>
    </div>
    <div class ="wpfbmb-floating-settings-wrap wpfbmb-floating-active-container" data-menu-ref="wpfbmb-display-settings">
        <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/floating-settings/display-settings.php'); ?>
    </div>
    <div class ="wpfbmb-floating-settings-wrap" data-menu-ref="wpfbmb-template-settings">
        <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/floating-settings/template-settings.php'); ?>
    </div>
    <div class ="wpfbmb-floating-settings-wrap" data-menu-ref="wpfbmb-color-settings">
        <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/floating-settings/color-settings.php'); ?>
    </div>
    <div class ="wpfbmb-floating-settings-wrap" data-menu-ref="wpfbmb-animation-settings">
        <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/floating-settings/animation-settings.php'); ?>
    </div>
    <div class ="wpfbmb-floating-settings-wrap " data-menu-ref="wpfbmb-position-settings">
        <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/floating-settings/position-settings.php'); ?>
    </div>
</div>
<div class="wpfbmb-wrap">
    <div class="wpfbmb-content-wrap">
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