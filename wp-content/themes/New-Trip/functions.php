<?php
add_theme_support('title-tag');
add_theme_support('post-thumbnails');

function Trip_scripts()
{
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('bootstrap', THEME_STYLES . '/bootstrap.css', VERSION);
    wp_enqueue_style('main', THEME_STYLES . '/main.css', VERSION);
    wp_enqueue_style('pages', THEME_STYLES . '/pages.css', VERSION);
    wp_enqueue_style('pages static', THEME_STYLES . '/pages-static.css', VERSION);

    //wp_enqueue_script('start', THEME_JS . '/start.js', array('jquery'), '3.3.4', true);
    //wp_enqueue_script('vendor', THEME_JS . '/vendor-4f048286.js', array('jquery'), '3.3.4', true);
    //wp_enqueue_script('layout', THEME_JS . '/__layout.svelte.js', array('jquery'), '3.3.4', true);
    //wp_enqueue_script('index', THEME_JS . '/index.svelte-fbb8a98d.js', array('jquery'), '3.3.4', true);
    //wp_enqueue_script('vacation', THEME_JS . '/vacations.svelte-f26223d9.js', array('jquery'), '3.3.4', true);
    //wp_enqueue_script('BookingWidget', THEME_JS . '/BookingWidget-206a715d.js', array('jquery'), '3.3.4', true);
    //wp_enqueue_script('flowbite', THEME_JS . '/flowbite.js', array('jquery'), '3.3.4', true);
}
add_action('wp_enqueue_scripts', 'Trip_scripts');

register_nav_menus(
    array('main-menu' => __( ' Main Menu' ),'footerCol1' =>__('Flight Deals') ,'footerCol2' =>__('Vacation Deals') ,'footerCol3' =>__('Hotel Deals') , 'footerCol4' =>__('Destinations') ,'footerCol5' =>__('Quik Links'))
);


function searchfilter($query) {
 
    if ($query->is_search && !is_admin() ) {
        $query->set('post_type',array('post'));
    }
 
return $query;
}
 
add_filter('pre_get_posts','searchfilter');

require_once get_template_directory() . '/globals/constants.php';
require_once THEME_DIR . '/globals/utilities.php';
require_once THEME_INCLUDES . '/posttypes/resister_posttypes.php';
include get_template_directory() . '/inc/meta-box.php';
require_once __DIR__ . '/cmb2/init.php';

require_once get_theme_file_path() .'/inc/codestar-framework/codestar-framework.php';
include get_template_directory() . '/inc/option-file.php';
//require_once THEME_INCLUDES . '/menu/custom-menu.php';

