<?php


add_action('init', 'loadThemeResources');
function loadThemeResources() {
     
     wp_enqueue_style('theme-extra', get_stylesheet_directory_uri().'/images/favicon.ico');
     wp_enqueue_style('theme-extra2', get_stylesheet_directory_uri().'/js/vendor/revslider/rs-plugin/css/settings.css');
     wp_enqueue_style('theme-extra3', get_stylesheet_directory_uri().'/css/fontello/css/fontello.css');
     wp_enqueue_style('theme-extra4', get_stylesheet_directory_uri().'/js/vendor/calculated-fields-form/css/stylepublic.css');
     wp_enqueue_style('theme-extra5', get_stylesheet_directory_uri().'/js/vendor/calculated-fields-form/css/cupertino/jquery-ui-1.8.20.custom.css');
     wp_enqueue_style('theme-extra6', get_stylesheet_directory_uri().'/css/core.animation.css');
     wp_enqueue_style('theme-extra7', get_stylesheet_directory_uri().'/css/responsive.css');
     wp_enqueue_style('theme-extra8', get_stylesheet_directory_uri().'/css/fontello/css/fontello.css');
     wp_enqueue_style('theme-extra9', get_stylesheet_directory_uri().'/css/bootstrap.css');
    wp_enqueue_style('theme-main', get_stylesheet_directory_uri().'/css/style.css?<?php echo time(); ?>'); 
}

function my_init() {
	if (!is_admin()) {
		wp_enqueue_script('jquery');

		wp_enqueue_script('mys_script', get_bloginfo('template_url') . '/js/vendor/jquery-1.11.3.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script1', get_bloginfo('template_url') . '/js/vendor/jquery-migrate.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script2', get_bloginfo('template_url') . '/js/vendor/revslider/rs-plugin/js/jquery.themepunch.tools.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script3', get_bloginfo('template_url') . '/js/vendor/revslider/rs-plugin/js/jquery.themepunch.revolution.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script4', get_bloginfo('template_url') . '/js/vendor/__packed.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script5', get_bloginfo('template_url') . '/js/custom/_main.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script6', get_bloginfo('template_url') . '/js/custom/core.utils.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script7', get_bloginfo('template_url') . '/js/custom/core.init.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script8', get_bloginfo('template_url') . '/js/custom/shortcodes.min.js', array('jquery'), '1.0', true);
         wp_enqueue_script('mys_script14', get_bloginfo('template_url') . '/js/custom/_form_contact.js', array('jquery'), '1.0', true);
        
        wp_enqueue_script('mys_script9', get_bloginfo('template_url') . '/js/vendor/datepicker.min.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script10', get_bloginfo('template_url') . '/js/vendor/calculated-fields-form/js/jQuery.stringify.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script11', get_bloginfo('template_url') . '/js/vendor/calculated-fields-form/js/jquery.validate.js', array('jquery'), '1.0', true);
        wp_enqueue_script('mys_script12', get_bloginfo('template_url') . '/js/vendor/calculated-fields-form/js/fbuilder.js', array('jquery'), '1.0', true);
       

	}
	
}

add_action('init', 'my_init');










