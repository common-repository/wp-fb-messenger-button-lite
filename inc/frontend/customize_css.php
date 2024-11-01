<style>

    .wpfbmb-<?php echo $random;?>.wpfbmb-button-<?php echo esc_attr($button_template);?> .wpfbmb-text-icon-both a { 
        background-color: <?php echo esc_attr($button_color); ?>;
        color: <?php echo esc_attr($text_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-<?php echo esc_attr($button_template);?> .wpfbmb-icon-only a { 
        background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
        color: <?php echo esc_attr($icon_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-<?php echo esc_attr($button_template);?> .wpfbmb-text-only a { 
        background-color: <?php echo esc_attr($button_color); ?>;
        color: <?php echo esc_attr($text_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-2 .wpfbmb-text-icon-both a i {
        background-color:<?php echo esc_attr($icon_backgroud_color); ?>;
        color: <?php echo esc_attr($icon_color); ?>;  
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-3 a {
        background-color: <?php echo esc_attr($button_color); ?>;
        color: <?php echo esc_attr($text_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-3 a i{
        background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
        color: <?php echo esc_attr($icon_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-4 a i {
        background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
        color: <?php echo esc_attr($icon_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-4 a{
        background-color: <?php echo esc_attr($button_color); ?>;
        color: <?php echo esc_attr($text_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-5 .wpfbmb-text-icon-both a i {
        background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
        color: <?php echo esc_attr($icon_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-5 .wpfbmb-text-icon-both a i {
        background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-6 .wpfbmb-text-icon-both a i {
        color: <?php echo $icon_color; ?>;
        background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-6 .wpfbmb-text-icon-both.wpfbmb-button-postion-right a i:after {
      <?php 
        if($icon_backgroud_color !=''){ ?>
            border-color: transparent <?php echo esc_attr($icon_backgroud_color); ?> transparent transparent;<?php
        }?>
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-6 .wpfbmb-text-icon-both.wpfbmb-button-postion-left a i:after {
        <?php if($icon_backgroud_color !=''){ ?>
            border-color: transparent transparent transparent <?php echo esc_attr($icon_backgroud_color); ?>;
        <?php
        }?>
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-7 .wpfbmb-text-icon-both a i {
        color: <?php echo esc_attr($icon_color); ?>;
        background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-7 .wpfbmb-icon-only a i {
        color: <?php echo esc_attr($icon_color); ?>;
        background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-8 .wpfbmb-text-icon-both a i {
        background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
        color: <?php echo esc_attr($icon_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-8 .wpfbmb-text-icon-both.wpfbmb-button-postion-right a i:after {<?php 
        if($icon_backgroud_color !=''){ ?>
            border-color: transparent <?php echo esc_attr($icon_backgroud_color); ?> transparent transparent;<?php 
        } ?>
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-8 .wpfbmb-text-icon-both.wpfbmb-button-postion-left a i:after {<?php
        if($icon_backgroud_color !=''){ ?>
            border-color: transparent transparent transparent <?php echo esc_attr($icon_backgroud_color); ?>;<?php 
        } ?>
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-8 a:before {
        border: 3px solid <?php echo esc_attr($icon_backgroud_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-<?php echo $random;?>.wpfbmb-button-template-9 .wpfbmb-text-icon-both a i {
        background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
        color: <?php echo esc_attr($icon_color); ?>;
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-9 .wpfbmb-text-icon-both.wpfbmb-button-postion-right a i:after {
        <?php 
        if($icon_backgroud_color !=''){ ?>
            border-color: transparent <?php echo esc_attr($icon_backgroud_color); ?> transparent transparent;
        <?php
        } ?>
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-9 .wpfbmb-text-icon-both.wpfbmb-button-postion-left a i:after {<?php
        if($icon_backgroud_color !=''){ ?>
            border-color: transparent transparent transparent <?php echo esc_attr($icon_backgroud_color); ?>;
            <?php
        } ?>
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-9 .wpfbmb-text-icon-both.wpfbmb-button-postion-right a i:after{
        <?php 
        if($icon_backgroud_color !=''){ ?>
            border-color: transparent <?php echo esc_attr($icon_backgroud_color); ?> transparent transparent;
            <?php
        } ?>
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-<?php echo $random;?>.wpfbmb-button-template-10 .wpfbmb-text-icon-both a i:after {
        <?php 
        if($icon_backgroud_color !=''){ ?>
            background-color: <?php echo esc_attr($icon_backgroud_color); ?>;
        <?php
        } ?>
    }
    .wpfbmb-<?php echo $random;?>.wpfbmb-button-template-10 .wpfbmb-text-icon-both a i {
        background-color:<?php echo esc_attr($icon_backgroud_color); ?>;
        color: <?php echo esc_attr($icon_color); ?>;
    }
    
</style>