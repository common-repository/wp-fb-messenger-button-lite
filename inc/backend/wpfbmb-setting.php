<?php
defined('ABSPATH') or die('No script kiddies please!');
$wpfbmb_settings = get_option('wpfbmb_settings');
?>
<div class="wrap wpfbmb-warp">
    <div class="wpfbmb-head-main">
        <img src="<?php echo esc_attr(wpfbmb_IMG_DIR) . '/logo.png' ?>"/>
        <span>Version <?php echo esc_attr(wpfbmb_PLUGIN_VERSION); ?></span>
    </div>
    <div class='wpwab-message-display-area'>
        <?php if(isset($_GET['message']) && $_GET['message'] == '1'){ ?>
            <div class="notice notice-success is-dismissible">
                <p><strong><?php _e('Settings saved successfully.', WPFBMB_TD); ?></strong></p>
                <button type="button" class="notice-dismiss">
                    <span class="screen-reader-text"><?php _e('Dismiss this notice.', WPFBMB_TD); ?></span>
                </button>
            </div>
        <?php }else if(isset($_GET['message']) && $_GET['message'] == '3'){?>
            <div class="notice notice-success is-dismissible">
                <p><strong><?php _e('Settings restored successfully.', WPFBMB_TD); ?></strong></p>
                <button type="button" class="notice-dismiss">
                    <span class="screen-reader-text"><?php _e('Dismiss this notice.', WPFBMB_TD); ?></span>
                </button>
            </div>
        <?php }else if(isset($_GET['message']) && $_GET['message'] != '3' && $_GET['message'] != '1'){ ?>
            <div class="notice notice-error is-dismissible">
                <p><?php _e('There has been an error.', WPFBMB_TD); ?></p>
            </div>
        <?php } ?>
    </div>
    <div class="wpfbmb-menu-wrapper">
        <ul class="wpfbmb-menu-tab">
            <li data-menu="wpfbmb-general-settings" class="wpfbmb-tab-tigger wpfbmb-active">
                <span class="dashicons dashicons-admin-users"></span>
                <?php _e('User Detail', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-floating-button" class="wpfbmb-tab-tigger">
                <span class="dashicons dashicons-welcome-write-blog"></span>
                <?php _e('Floating Button', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-shortcode-generate" class="wpfbmb-tab-tigger">
                <span class="dashicons dashicons-layout"></span>
                <?php _e('Shortcode Generator', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-how-to-use" class="wpfbmb-tab-tigger">
                <span class="dashicons dashicons-admin-generic"></span>
                <?php _e('How To Use', WPFBMB_TD); ?>
            </li>
            <li data-menu="wpfbmb-about" class="wpfbmb-tab-tigger">
                <span class="dashicons dashicons-groups"></span>
                <?php _e('More WordPress Stuff', WPFBMB_TD); ?>
            </li>
        </ul>
    </div>
    <form method="post" id="wpbfmb-save-form" action="<?php echo admin_url('admin-post.php'); ?>"  >
        <input type="hidden" name="action" value="wpfbmb_settings_save"/>
        <div class= "wpfbmb-settings-container">
            <div class="wpfbmb-left">
                <div class ="wpfbmb-settings-wrap wpfbmb-active-container" data-menu-ref="wpfbmb-general-settings">
                    <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/wpfbmb-general-setting.php'); ?>
                </div>
                <div class ="wpfbmb-settings-wrap" data-menu-ref="wpfbmb-floating-button">
                    <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/wpfbmb-floating-button.php'); ?>
                </div>
                <div class="wpfbmb-settings-wrap" data-menu-ref="wpfbmb-shortcode-generate">
                    <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/wpfbmb-shortcode-generate.php'); ?>
                </div>
                <div class="wpfbmb-settings-wrap" data-menu-ref="wpfbmb-how-to-use">
                    <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/wpfbmb-how-to-use.php'); ?>
                </div>
                <div class ="wpfbmb-settings-wrap " data-menu-ref="wpfbmb-about">
                    <?php include(wpfbmb_PLUGIN_PATH . 'inc/backend/wpfbmb-about.php'); ?>
                </div>
            </div>
        </div>
    </form>
</div>