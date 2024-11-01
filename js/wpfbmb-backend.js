jQuery(document).ready(function ($) {
    
    $('.wpfbmb-desktop').click(function () {
        if ($(this).is(':checked')) {
            $(this).val('show');
        } else{
            $(this).val('hide');
        }
    });
    $('#wpfbmb_enable_desktop_button_shortcode').click(function () {
        if ($(this).is(':checked')) {
            $(this).val('show');
        } else{
            $(this).val('hide');
        }
    });
    $('.wpfbmb-mobile').click(function () {
        if ($(this).is(':checked')) {
            $(this).val('show');
        } else{
            $(this).val('hide');
        }
    });
    $('#wpfbmb_enable_mobile_button_shortcode').click(function () {
        if ($(this).is(':checked')) {
            $(this).val('show');
        } else{
            $(this).val('hide');
        }
    });
    $('#wpfbmb_button_text_enable_shortcode').click(function () {
        if ($(this).is(':checked')) {
            $(this).val('show');
        } else{
            $(this).val('hide');
        }
    });
    $('#wpfbmb_enable_sticky_button_shortcode').click(function () {
        if ($(this).is(':checked')) {
            $(this).val('show');
        } else{
            $(this).val('hide');
        }
    });
    $('#wpfbmb-button-option').change(function () {
        $value_optn = this.value;
        if ($value_optn === 'menu-button') {
            $('.wpfbmb-sticky-wrap').hide();
        } else {
            $('.wpfbmb-sticky-wrap').show();
        }
    });
    $('.wpfbmb_short_codeDisp').click(function () {
        $(this).select();
        $(this).focus();
        document.execCommand('copy');
        $(this).siblings('.wpfbmb_copied-msg').show().delay(1000).fadeOut();
    });

    $('.cpa-color-picker').wpColorPicker();
    $(function () {
        $("#wpfbmb_button_text").click(function () {
            if ($(this).is(":checked")) {
                $("#wpfbmb_show_button_text").show();
            } else {
                $("#wpfbmb_show_button_text").hide();
            }
        });
    });

    $(function () {
        $("#wpfbmb_tooltip_text").click(function () {
            if ($(this).is(":checked")) {
                $("#wpfbmb_tooltip_text_value").show();
            } else {
                $("#wpfbmb_tooltip_text_value").hide();
            }
        });
    });

    $('.wpfbmb-tab-tigger').click(function () {
        $('.wpfbmb-tab-tigger').removeClass('wpfbmb-active');
        $(this).addClass('wpfbmb-active');
        var active_tab_key = $('.wpfbmb-tab-tigger.wpfbmb-active').data('menu');
        $('.wpfbmb-settings-wrap').removeClass('wpfbmb-active-container');
        $('.wpfbmb-settings-wrap[data-menu-ref="' + active_tab_key + '"]').addClass('wpfbmb-active-container');
    });

    $('.wpfbmb-floating-tab-tigger').click(function () {
        $('.wpfbmb-floating-tab-tigger').removeClass('wpfbmb-active');
        $(this).addClass('wpfbmb-active');
        var active_tab_key = $('.wpfbmb-floating-tab-tigger.wpfbmb-active').data('menu');
        $('.wpfbmb-floating-settings-wrap').removeClass('wpfbmb-floating-active-container');
        $('.wpfbmb-floating-settings-wrap[data-menu-ref="' + active_tab_key + '"]').addClass('wpfbmb-floating-active-container');
    });
    
    $('.wpfbmb-shortcode-tab-tigger').click(function () {
        $('.wpfbmb-shortcode-tab-tigger').removeClass('wpfbmb-active');
        $(this).addClass('wpfbmb-active');
        var active_tab_key = $('.wpfbmb-shortcode-tab-tigger.wpfbmb-active').data('menu');
        $('.wpfbmb-shortcode-settings-wrap').removeClass('wpfbmb-shortcode-active-container');
        $('.wpfbmb-shortcode-settings-wrap[data-menu-ref="' + active_tab_key + '"]').addClass('wpfbmb-shortcode-active-container');
    });

    $('.wpfbmb-menu-tab-tigger').click(function () {
        $('.wpfbmb-menu-tab-tigger').removeClass('wpfbmb-active');
        $(this).addClass('wpfbmb-active');
        var active_tab_key = $('.wpfbmb-menu-tab-tigger.wpfbmb-active').data('menu');
        $('.wpfbmb-menu-settings-wrap').removeClass('wpfbmb-menu-active-container');
        $('.wpfbmb-menu-settings-wrap[data-menu-ref="' + active_tab_key + '"]').addClass('wpfbmb-menu-active-container');
    });
    
    $('#wpfbmb-button-template').change(function () {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.wpfbmb-grid-common').hide();
        $('#wpfbmb-grid-demo-' + current_id).show();
    });

    $('#wpfbmb-button-template-menu').change(function () {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.wpfbmb-grid-common-menu').hide();
        $('#wpfbmb-grid-demo-menu-' + current_id).show();
    });

    //Floating Button Template
    $('#wpfbmb-button-template-floating').change(function () {
        var template_value = $(this).val();
        var array_break = template_value.split('-');
        var current_id = array_break[1];
        $('.wpfbmb-floating-common').hide();
        $('#wpfbmb-floating-demo-' + current_id).show();
    });

    if ($("#wpfbmb-button-template-floating option:selected")[0]) {
        cur_temp_val = $('#wpfbmb-button-template-floating option:selected').val();
        var array_break = cur_temp_val.split('-');
        var current_id = array_break[1];
        $('.wpfbmb-floating-common').hide();
        $('#wpfbmb-floating-demo-' + current_id).show();
    }
   
    $('.wpfbmb-field').on('change', '#wpfbmb-button-location', function () {
        var template_value = $(this).find('option:selected').data('img');
        $(this).closest('.wpfbmb-field').find('.wpfbmb-position-common img').attr('src', template_value);
    });
    
    $('.wpfbmb-field').on('change', '#wpfbmb-button-location-shortcode', function () {
        var template_value = $(this).find('option:selected').data('img');
        $(this).closest('.wpfbmb-field').find('.wpfbmb-shortcode-common img').attr('src', template_value);
    });
    
    $('.wpfbmb-field').on('change', '#wpfbmb-button-animation', function () {
        conceptName = $(this).val();
        positiomName = $('#button-position-select').val();
        var defaultclasses ='wpfbmb-button-wrap wpfbmb-button-template-1 wpfbmb-text-icon-both wpfbmb-button-postion-right wpfbmb-text-inner-wrapper  ';
        $('.wpfbmb-button-wrap').removeClass().addClass(defaultclasses + conceptName);
    });

    $('.wpfbmb-field').on('change', '#wpfbmb-button-animation-shortcode', function () {
        conceptName = $(this).val();
        positiomName = $('#button-position-select').val();
        var defaultclasses ='wpfbmb-button-wrap wpfbmb-button-template-1 wpfbmb-text-icon-both wpfbmb-button-postion-right wpfbmb-text-inner-wrapper  ';
        $('.wpfbmb-button-wrap').removeClass().addClass(defaultclasses + conceptName);
    });
    
    $( "#wpfbmb-button-template-menu" ).on( "click", function() {
        $('.menu-template').hide();
    });

    $( "#wpfbmb-button-template" ).on( "click", function() {
        $('.menu-template').hide();
    });

    $( "#wpfbmb-button-template-floating" ).on( "click", function() {
        $('.menu-template').hide();
    });

    $(".wpfbmb-shortcode-button").click(function () {
        var enable_button = ($("input[name=wpfbmb_enable_button]").attr('checked')) ? 'show' : 'hide';
        var enable_desktop=$('#wpfbmb_enable_desktop_button_shortcode').val();
        //var enable_desktop = ($("input[name=wpfbmb_enable_desktop_button]").attr('checked')) ? 'show' : 'hide';
        var enable_mobile=$('#wpfbmb_enable_mobile_button_shortcode').val();
        //var enable_mobile = ($("input[name=wpfbmb_enable_mobile_button]").attr('checked')) ? 'show' : 'hide';
        var button_template = $("#wpfbmb-button-template option:selected").val();
        var button_animation = $("#wpfbmb-button-animation-shortcode").val();
        //var button_animation = $("#wpfbmb-button-animation option:selected").val();
        var button_location = $("#wpfbmb-button-location-shortcode option:selected").val();
        var button_color = ($("#btn_color").val());
        var text_color = $("#text_color").val();
        var icon_background_color = ($("#icon_background_color").val());
        var icon_color = ($("#icon_color").val());   
        var user_name = ($("#wpfbmb_user_name_general").val());
        var button_text_enable = $('#wpfbmb_button_text_enable_shortcode').val();
        //var button_text_enable = ($("input[name=wpfbmb_button_text_enable]").attr('checked')) ? 'show' : 'hide';
        var button_text = ($("#wpfbmb_button_name_shortcode").val());
        var button_text_position = $('input[name="button_text_align"]:checked').val();
        var enable_sticky = $('#wpfbmb_enable_sticky_button_shortcode').val();
        //var enable_sticky = ($("input[name=wpfbmb_enable_sticky_button]").attr('checked')) ? 'show' : 'hide';

        if (button_text_enable != 'show') {
            $("#wpfbmb_generated_shortcode").html("[wp_fb_messenger_button" + " " + "enable_desktop='" + enable_desktop + "'" + " " + "enable_mobile='" + enable_mobile + "'" + " " +
                    "button_template='" + button_template + "'" + " " + "button_color='" + button_color +
                    "'" + " " + "icon_color='" + icon_color + "'" + " " + "user_name='" + user_name
                    + "'" + " " + "button_location='" + button_location + "'" + " "  +
                    "button_animation='" + button_animation + "'" + " " + "enable_sticky='" + enable_sticky +
                    "'" + " " + "icon_background_color='" + icon_background_color + "'" + " " + "text_color='" + text_color + "']"
                    );
        } else {
            $("#wpfbmb_generated_shortcode").html("[wp_fb_messenger_button" + " " + "enable_desktop='" + enable_desktop + "'" + " " + "enable_mobile='" + enable_mobile + "'" + " " +
                    "button_template='" + button_template + "'" + " " + "button_color='" + button_color +
                    "'" + " " + "icon_color='" + icon_color + "'" + " " + "user_name='" + user_name + "'" + " " + "button_location='" + button_location + "'" + " " + "button_enable_text='" + button_text_enable + "'" + " " + "button_text='" + button_text +
                    "'" + " " + "button_text_position='" + button_text_position + "'" + " " + "button_animation='" + button_animation +
                    "'" + " " + "enable_sticky='" + enable_sticky + "'" + " " + "icon_background_color='" + icon_background_color + "'" + " " + "text_color='" + text_color + "']"
                    );
        }
    });
});