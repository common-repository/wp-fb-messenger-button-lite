<?php

defined('ABSPATH') or die('No script kiddies please!');

/**
  Plugin Name:  MContact Button
  Plugin URI:   https://access-keys.com/wp-messenger-button-lite
  Description:  MContact Button   allows you to easily create chat via messenger in WordPress.
  Version:      2.0.8
  Author:       Access Keys
  Author URI:   https://access-keys.com
  License:      GPL2
  License URI:  https://www.gnu.org/licenses/gpl-2.0.html
  Text Domain:  wp-fb-messenger-button-lite
  Domain Path:  /languages
 */
  
  define('wpfbmb_PLUGIN_PATH', plugin_dir_path(__FILE__));
  include(wpfbmb_PLUGIN_PATH . 'inc/frontend/wpfbmb-mobile-detect.php');
  include(wpfbmb_PLUGIN_PATH . 'inc/backend/wpfbmb-widget.php');

  if (!class_exists('wpfbmb_Class')) {

    class wpfbmb_Class {
        function __construct() {
            $this->define_constants();
            add_action('plugins_loaded', array($this, 'wpfbmb_load_textdomain'));
            add_action('admin_menu', array($this, 'wpfbmb_menu'));
            add_action('admin_enqueue_scripts', array($this, 'wpfbmb_register_assets'));
            add_action('wp_enqueue_scripts', array($this, 'wpfbmb_register_frontend_assets'));
            add_action('admin_post_wpfbmb_settings_save', array($this, 'save_form_settings'));
            add_shortcode('wp_fb_messenger_button', array($this, 'wpfbmb_shortcode'));
            add_action('widgets_init', array($this, 'wpfbmb_register_widget'));
            add_action('wp_footer', array($this, 'testing_footer'));
            add_filter( 'plugin_row_meta', array( $this, 'wpfbmb_plugin_row_meta' ), 10, 2 );
            add_filter( 'admin_footer_text', array( $this, 'wpfbmb_admin_footer_text' ) );
            add_action( 'admin_init', array( $this, 'redirect_to_site' ), 1 );
        }

        function redirect_to_site(){

            if ( isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] == 'wpfbmb-documentation' ) {
               wp_redirect( WPFBMB_LITE_DOC );
               exit();
            }

            if ( isset( $_GET[ 'page' ] ) && $_GET[ 'page' ] == 'wpfbmb-premium' ) {
               wp_redirect( WPFBMB_PRO_LINK );
               exit();
            }
        }

        function wpfbmb_plugin_row_meta( $links, $file ){
        if ( strpos( $file, 'wp-fb-messenger-button-lite.php' ) !== false ) {
            $new_links = array(
                'demo' => '<a href="'.WPFBMB_LITE_DEMO.'" target="_blank"><span class="dashicons dashicons-welcome-view-site"></span>Live Demo</a>',
                'doc' => '<a href="'.WPFBMB_LITE_DOC.'" target="_blank"><span class="dashicons dashicons-media-document"></span>Documentation</a>',
                'support' => '<a href="http://accesspressthemes.com/support" target="_blank"><span class="dashicons dashicons-admin-users"></span>Support</a>',
                'pro' => '<a href="'.WPFBMB_PRO_LINK.'" target="_blank"><span class="dashicons dashicons-cart"></span>Premium version</a>'
            );
            $links = array_merge( $links, $new_links );
        }
        return $links;
    }

    function wpfbmb_admin_footer_text( $text ){
        global $post;
        if (isset($_GET['page']) && $_GET['page'] === 'wp-fb-messenger-button-lite' ) {
            $text = 'Enjoyed ' . WPFBMB_LITE_PLUGIN_NAME . '? <a href="' . WPFBMB_LITE_RATING . '" target="_blank">Please leave us a ★★★★★ rating</a> We really appreciate your support! | Try premium version <a href="' .WPFBMB_PRO_LINK . '" target="_blank">' . WPFBMB_PRO_PLUGIN_NAME . '</a> - more features, more power!';
            return $text;
        } else {
            return $text;
        }
    }

    function testing_footer() {
        $wpfbmb_settings = get_option('wpfbmb_settings');
        $omit_keys = array('generate_shortcode', 'pages', 'posts', 'showbutton', 'wpfbmb_button_template', 'wpfbmb_button_animation', 'showbutton', 'first', 'showbuttontext', 'messenger_button_text_menu', 'wpfbmb_button_template_menu', 'button_color_menu', 'text_color_menu', 'icon_background_color_menu', 'icon_color_menu', 'menu_list', 'category', 'fb_user_name_menu', 'button_text_show', 'button_name');
        $shortcode_atts = array();
        if( !empty($wpfbmb_settings) ){
            foreach ($wpfbmb_settings as $key => $val) {
                if (!(is_array($val) || in_array($key, $omit_keys))) {
                    $shortcode_atts[] = $key . "='" . $val . "'";
                }
            }
            $shortcode_atts = implode(' ', $shortcode_atts);
            $shortcode = '[wp_messenger_button ' . $shortcode_atts . ' ]';
            if (isset($wpfbmb_settings['pages']) && $wpfbmb_settings['pages'] == 'homepage') {
                if (is_home() || is_front_page()) {
                    echo do_shortcode("$shortcode");
                }
            }
        }
    }

    function define_constants() {
        defined('wpfbmb_PLUGIN_URL') or define('wpfbmb_PLUGIN_URL', plugin_dir_url(__FILE__));
        defined('wpfbmb_PLUGIN_PATH') or define('wpfbmb_PLUGIN_PATH', plugin_dir_path(__FILE__));
        define('wpfbmb_IMG_DIR', plugin_dir_url(__FILE__) . 'images');
        define('wpfbmb_CSS_DIR', plugin_dir_url(__FILE__) . 'css');
        define('wpfbmb_JS_DIR', plugin_dir_url(__FILE__) . 'js/');
        defined('wpfbmb_URL') or define('wpfbmb_URL', plugin_dir_url(__FILE__));
        defined('wpfbmb_PLUGIN_VERSION') or define('wpfbmb_PLUGIN_VERSION', '2.0.8');  //plugin version
        defined('WPFBMB_TD') or define('WPFBMB_TD', 'wp-fb-messenger-button-lite');

        defined('WPFBMB_LITE_PLUGIN_NAME') or define('WPFBMB_LITE_PLUGIN_NAME', 'WP FB Messenger Button Lite');
        defined('WPFBMB_LITE_DEMO') or define('WPFBMB_LITE_DEMO', 'http://demo.accesspressthemes.com/wordpress-plugins/wp-fb-messenger-lite');
        defined('WPFBMB_LITE_DOC') or define('WPFBMB_LITE_DOC', 'https://accesspressthemes.com/documentation/mcontact-button/');
        defined('WPFBMB_LITE_DETAIL') or define('WPFBMB_LITE_DETAIL', 'https://accesspressthemes.com/wordpress-plugins/wp-fb-messenger-button-lite/');
        defined('WPFBMB_LITE_RATING') or define('WPFBMB_LITE_RATING', 'https://wordpress.org/support/plugin/wp-fb-messenger-button-lite/reviews/#new-post');

        defined('WPFBMB_PRO_PLUGIN_NAME') or define('WPFBMB_PRO_PLUGIN_NAME', 'WP FB Messenger Button');
        defined('WPFBMB_PRO_LINK') or define('WPFBMB_PRO_LINK', 'https://accesspressthemes.com/wordpress-plugins/fb-messenger-button-premium-plugin/');
        defined('WPFBMB_PRO_DEMO') or define('WPFBMB_PRO_DEMO', 'http://demo.accesspressthemes.com/wordpress-plugins/wp-fb-messenger-button/');
        defined('WPFBMB_PRO_DETAIL') or define('WPFBMB_PRO_DETAIL', 'https://accesspressthemes.com/wordpress-plugins/fb-messenger-button-premium-plugin/');
    }

    function wpfbmb_load_textdomain() {
        load_plugin_textdomain(WPFBMB_TD, false, basename(dirname(__FILE__)) . '/languages');
    }

    function wpfbmb_menu() {
        add_menu_page(__('MContact Button', WPFBMB_TD), __('MContact Button', WPFBMB_TD), 'manage_options', WPFBMB_TD, array($this, 'messenger_setting'), 'dashicons-facebook');
        add_submenu_page('wp-fb-messenger-button-lite', __('Documentation', 'wp-fb-messenger-button-lite'), __('Documentation', 'wp-fb-messenger-button-lite'), 'manage_options', 'wpfbmb-documentation', '__return_false', null, 9);
        add_submenu_page('wp-fb-messenger-button-lite', __('Check Premium Version', 'wp-fb-messenger-button-lite'), __('Check Premium Version', 'wp-fb-messenger-button-lite'), 'manage_options', 'wpfbmb-premium', '__return_false', null, 9);
    }

    function messenger_setting() {
        include(wpfbmb_PLUGIN_PATH . 'inc/backend/wpfbmb-setting.php');
    }

    function wpfbmb_register_assets() {
        if( isset($_GET['page']) && $_GET['page'] == 'wp-fb-messenger-button-lite'){
            wp_enqueue_style('wp-color-picker');
            wp_enqueue_style('wpfbmb-backend-style', wpfbmb_CSS_DIR . '/backend/wpfbmb-backend.css', array(), wpfbmb_PLUGIN_VERSION);
            wp_enqueue_style('wpfbmb-fontawesome-style', wpfbmb_CSS_DIR . '/backend/font-awesome/font-awesome.min.css', false, wpfbmb_PLUGIN_VERSION);
            wp_enqueue_style('wpfbmb-elegenticon', wpfbmb_CSS_DIR . '/frontend/elegant_font/HTML_CSS/style.css', false, wpfbmb_PLUGIN_VERSION);
            wp_enqueue_script('wpfbmb-backend-script', wpfbmb_JS_DIR . '/wpfbmb-backend.js', array('jquery', 'jquery-ui-sortable', 'wp-color-picker'), wpfbmb_PLUGIN_VERSION);
            $admin_ajax_nonce = wp_create_nonce('wpfbmb-admin-ajax-nonce');
            $admin_ajax_object = array('ajax_url' => admin_url('admin-ajax.php'), 'ajax_nonce' => $admin_ajax_nonce);
            wp_localize_script('wpfbmb-backend-script', 'wpfbmb_backend_js_params', $admin_ajax_object);
            wp_enqueue_style('wpfbmb-socicon', wpfbmb_CSS_DIR . '/backend/socicon/style.css', false, wpfbmb_PLUGIN_VERSION);
        }
    }

    function wpfbmb_register_frontend_assets() {
//        wp_enqueue_style('wpfbmb-frontend-style', wpfbmb_PLUGIN_URL . 'css/frontend/wpfbmb-frontend.css', array(), wpfbmb_PLUGIN_URL);
        wp_enqueue_style('wpfbmb-socicon', wpfbmb_CSS_DIR . '/frontend/socicon/style.css', false, wpfbmb_PLUGIN_VERSION);
        wp_enqueue_style('wpfbmb-elegenticon', wpfbmb_CSS_DIR . '/frontend/elegant_font/HTML_CSS/style.css', false, wpfbmb_PLUGIN_VERSION);
        wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css?family=Raleway|ABeeZee|Aguafina+Script|Open+Sans|Roboto|Roboto+Slab|Lato|Titillium+Web|Source+Sans+Pro|Playfair+Display|Montserrat|Khand|Oswald|Ek+Mukta|Rubik|PT+Sans+Narrow|Poppins|Oxygen:300,400,600,700', array(), wpfbmb_PLUGIN_VERSION);
    }

    static function sanitize_array( $array = array(), $sanitize_rule = array() ){
        if ( ! is_array( $array ) || count( $array ) == 0 ) {
            return array();
        }
        foreach ( $array as $k => $v ) {
            if ( ! is_array( $v ) ) {
                $default_sanitize_rule = (is_numeric( $k )) ? 'text' : 'html';
                $sanitize_type = isset( $sanitize_rule[ $k ] ) ? $sanitize_rule[ $k ] : $default_sanitize_rule;
                $array[ $k ] = self:: sanitize_value( $v, $sanitize_type );
            }

            if ( is_array( $v ) ) {
                $array[ $k ] = self:: sanitize_array( $v, $sanitize_rule );
            }
        }
        return $array;
    }

    static function sanitize_value( $value = '', $sanitize_type = 'text' ){
        switch ( $sanitize_type ) {
            case 'html':
            $allowed_html = wp_kses_allowed_html( 'post' );
            return wp_kses( $value, $allowed_html );
            break;
            default:
            return sanitize_text_field( $value );
            break;
        }
    }

    function save_form_settings() {
        if (isset($_POST['wpfbmb_form_nonce_field']) && wp_verify_nonce($_POST['wpfbmb_form_nonce_field'], 'wpfbmb_form_nonce')) {
            $wpfbmb_settings = self:: sanitize_array($_POST['wpfbmb_settings']);
            update_option('wpfbmb_settings', $wpfbmb_settings);
            wp_redirect(admin_url('admin.php?page=wp-fb-messenger-button-lite&message=1'));
            exit;
        }
    }

    function print_array($array) {
        echo "<pre>";
        print_r($array);
        echo "</pre>";
    }

    function wpfbmb_shortcode($atts) {
        ob_start();
        include('inc/frontend/wpfbmb_shortcode.php' );
        $html = ob_get_contents();
        ob_get_clean();
        return $html;
    }

    function wpfbmb_register_widget() {
        register_widget('wpfbmb_Widget');
    }

}
new wpfbmb_Class();
}