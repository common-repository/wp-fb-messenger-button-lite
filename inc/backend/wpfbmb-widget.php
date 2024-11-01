<?php defined('ABSPATH') or die("No script kiddies please!");

    class wpfbmb_Widget extends WP_Widget {

        function __construct() {
            parent::__construct(
                    'wpfbmb_widget', // Base ID
                    __('WP Messenger Button', WPFBMB_TD), // Name OF widget
                    array('description' => __('WP Messenger Button Widget', WPFBMB_TD)) // Args For Widget
            );
        }

        public function widget($args, $instance) {
            echo $args['before_widget'];
            if (!empty($instance['title'])) {
                echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
            }

            if (isset($instance['shortcode']) && $instance['shortcode'] != '') {
                echo do_shortcode($instance['shortcode']);
            }
            echo $args['after_widget'];
        }

        public function form($instance) {
            $title = isset($instance['title']) ? $instance['title'] : '';
            $shortcode = isset($instance['shortcode']) ? $instance['shortcode'] : '';
            ?>
            <p>
                <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title:', WPFBMB_TD); ?></label> 
                <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>"/>
            </p>
            <p>
                <label for="<?php echo $this->get_field_id('shortcode'); ?>"><?php _e('Shortcode:', WPFBMB_TD); ?></label>
                <textarea class="wpfbmb-widget-textarea" id="<?php echo $this->get_field_id('shortcode'); ?>" name="<?php echo $this->get_field_name('shortcode'); ?>"><?php echo esc_attr($shortcode); ?></textarea>
            </p>
            <?php
        }
        
        public function update($new_instance, $old_instance) {
            $instance = array();
            $instance['title'] = (!empty($new_instance['title']) ) ? sanitize_text_field($new_instance['title']) : '';
            $instance['shortcode'] = (!empty($new_instance['shortcode']) ) ? sanitize_text_field($new_instance['shortcode']) : '';
            return $instance;
        }
    }