<?php
function theme_Styles(){	
	wp_enqueue_style('Bootstrap', get_theme_file_uri('/css/bootstrap.min.css'));
	wp_enqueue_style('FontAwesome', get_theme_file_uri('/css/font-awesome.min.css'));
	wp_enqueue_style('Fonticons', get_theme_file_uri('/css/fonticons.css'));
	wp_enqueue_style('PluginsStyles', get_theme_file_uri('/css/plugins.css'));
	wp_enqueue_style('responsivestyles', get_theme_file_uri('/css/responsive.css'));
	wp_enqueue_style('SlickNav', get_theme_file_uri('/css/slicknav.min.css'));
	wp_enqueue_style('Mytheme', get_stylesheet_uri());
	wp_enqueue_script('Modrenizer', get_theme_file_uri('/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js'), NULL, '1.4.2', false);
	wp_enqueue_script('Jquery', get_theme_file_uri('/js/vendor/jquery-1.11.2.min.js'), NULL, '1.4.2', true);
	wp_enqueue_script('BootstrapJs', get_theme_file_uri('/js/vendor/bootstrap.min.js'), NULL, '1.4.2', true);
	wp_enqueue_script('isotope', get_theme_file_uri('/js/vendor/isotope.min.js'), NULL, '1.4.2', true);
	wp_enqueue_script('jqueryeasing', get_theme_file_uri('/js/jquery.easing.1.3.js'), NULL, '1.3', true);
	wp_enqueue_script('jquerymixitup', get_theme_file_uri('/js/jquery.mixitup.min.js'), NULL, '1.0', true);
	wp_enqueue_script('jqueryslicknav', get_theme_file_uri('/js/jquery.slicknav.min.js'), NULL, '1.0', true);
	wp_enqueue_script('Main', get_theme_file_uri('/js/main.js'), NULL, '1.4', true);
	wp_enqueue_script('Pluginsjs', get_theme_file_uri('/js/plugins.js'), NULL, '1.4.9', true);
}

add_action('wp_enqueue_scripts', 'theme_Styles');
