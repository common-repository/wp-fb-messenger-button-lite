<?php
defined('ABSPATH') or die('No script kiddies please!');

$wpfbmb_settings = get_option('wpfbmb_settings');
$wpfbmb_screen_detector = new wpfbmb_Mobile_Detect();

$enable_desktop = (isset($atts['enable_desktop']) && $atts['enable_desktop'] =='show') ? 'show' : 'hide';
$enable_mobile = (isset($atts['enable_mobile']) && $atts['enable_mobile'] =='show') ? 'show' : 'hide';
$button_template = (isset($atts['button_template'])) ? $atts['button_template'] : 'template-1';
$button_enable_text = (isset($atts['button_enable_text'])) ? $atts['button_enable_text'] : 'hide';
$button_text = (isset($atts['button_text'])) ? $atts['button_text'] : '';
$user_name = (isset($atts['user_name'])) ? $atts['user_name'] : 'devteam2070';
$button_color=(isset($atts['button_color'])) ? $atts['button_color'] : '';
$icon_color=(isset($atts['icon_color'])) ? $atts['icon_color'] : '';
$button_position = (isset($atts['button_location'])) ? $atts['button_location'] : '';
$btn_class = explode('_', $button_position);
$btn_text_position=(isset($atts['button_text_position'])) ? $atts['button_text_position'] : '';
$button_animation = (isset($atts['button_animation'])) ? $atts['button_animation'] : '';
$enable_sticky = (isset($atts['enable_sticky'])) ? $atts['enable_sticky'] : 'enable_sticky';
$icon_backgroud_color = (isset($atts['icon_background_color'])) ? $atts['icon_background_color'] : '';
$text_color = (isset($atts['text_color'])) ? $atts['text_color'] : 'text_color';

$random=rand(11111,99999);
if(!empty($btn_class[0]))
{
    $first= "wpfbmb-".$btn_class[0];
}
if(!empty($btn_class[1]))
{
    $last= "wpfbmb-".$btn_class[1];
}
(!empty($first)? $first: $first ="");
(!empty($last)? $last: $last ="");

$new_class = $first." ".$last;
?>
<div class="wpfbmb-<?php echo $random;?> 
             wpfbmb-button-wrap 
             wpfbmb-<?php echo esc_attr($button_animation);?> 
             wpfbmb-button-<?php echo esc_attr($button_template);?> 
             <?php echo esc_attr($new_class) ?> 
             <?php if($enable_sticky =='show'){ echo 'wpfbmb-enable-sticky'; } ?> ">

    <div class="<?php if($button_enable_text =='show'){ echo 'wpfbmb-text-icon-both';}?> 
                <?php if($button_enable_text !='show'){ echo 'wpfbmb-icon-only';} ?> 
                <?php if($btn_text_position == 'right'){ echo 'wpfbmb-button-postion-right';} ?>
                <?php if($btn_text_position == 'left'){ echo 'wpfbmb-button-postion-left';} ?> 
                wpfbmb-text-inner-wrapper">
           <?php
            if($wpfbmb_screen_detector->isMobile()){
                if($enable_mobile =='show'){
                    if($button_enable_text != 'show'){?>
                        <a href="https://m.me/<?php echo esc_attr($user_name);?>" target="_blank">
                            <i class="icon_comment_alt"></i>
                        </a>
                        <?php
                    }else if($btn_text_position == 'right') { ?>
                        <a href="https://m.me/<?php echo esc_attr($user_name);?>" target="_blank">
                          <?php echo esc_attr($button_text);?>
                            <i class="icon_comment_alt"></i>
                        </a>
                        <?php
                    }else if ($btn_text_position == 'left') {?>
                        <a href="https://m.me/<?php echo esc_attr($user_name);?>" target="_blank">
                            <i class="icon_comment_alt"></i>
                            <?php echo esc_attr($button_text);?>
                        </a>
                        <?php
                    }
                }
            }else{
                if( $enable_desktop =='show' ){
                    if($button_enable_text != 'show'){ ?>
                        <a href="https://m.me/<?php echo esc_attr($user_name);?>" target="_blank">
                            <i class="icon_comment_alt"></i>
                        </a>
                        <?php
                    }else if($btn_text_position == 'right'){ ?>
                        <a href="https://m.me/<?php echo esc_attr($user_name);?>" target="_blank">
                            <?php echo esc_attr($button_text);?>
                            <i class="icon_comment_alt"></i>
                        </a>
                         <?php
                    }else if ($btn_text_position == 'left'){ ?>
                        <a href="https://m.me/<?php echo esc_attr($user_name);?>" target="_blank">
                            <i class="icon_comment_alt"></i>
                            <?php echo esc_attr($button_text);?>
                        </a>
                        <?php
                    }
                }
            } ?>
    </div>
</div>
<?php include(wpfbmb_PLUGIN_PATH. 'inc/frontend/customize_css.php'); ?>