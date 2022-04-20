<?php

namespace Inc\Base;

class Enqueue extends BaseController
{
    function register()
    {
        add_action('wp_enqueue_scripts', array($this, 'enqueue'));
    }

    function enqueue()
    {

        wp_enqueue_style('ts-main-css', $this->plugin_url . 'public/css/ts-main.css',null,'1.1.3');
        wp_enqueue_style('ts-owl.carousel.min', $this->plugin_url . 'public/css/ts-owl.carousel.min.css',null,'1.1.3');
        wp_enqueue_style('ts-datepicker', $this->plugin_url . 'public/css/ts-datepicker.css',null,'1.1.3');
        wp_enqueue_script('ts-bootstrap-input-spinner', $this->plugin_url . 'public/js/ts-bootstrap-input-spinner.js',['jquery'],'1.1.3',true);
        wp_enqueue_script('ts-datepicker', $this->plugin_url . 'public/js/ts-datepicker.js',['jquery'],'1.1.3',true);
        wp_enqueue_script('ts-main-js', $this->plugin_url . 'public/js/ts-main.js',['jquery'],'1.1.3',true);
        wp_enqueue_script('ts-handlebars-min', $this->plugin_url . 'public/js/ts-handlebars-min.js',['jquery'],'1.1.3',true);
        wp_enqueue_script('ts-typeahead.min', $this->plugin_url . 'public/js/ts-typeahead.min.js');
	    wp_localize_script( 'ts-main-js', 'ts_config', [
		    'ajax_url'   => admin_url('admin-ajax.php'),
	    ] );
    }
}