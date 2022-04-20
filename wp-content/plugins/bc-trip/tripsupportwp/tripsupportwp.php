<?php

/*
Plugin Name: TripSupportWP
Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
Description: ...
Version: 1.0
Author: Hamzeh
Author URI: https://hamyarsystem.com/
License: GPL2
*/

defined( 'ABSPATH' ) or die( 'direct access is not possible ☺☻' );

if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
    require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}


function activate_tripsupportwp() {
    Inc\Base\Activate::activate();
}
register_activation_hook( __FILE__, 'activate_tripsupportwp' );


function deactivate_tripsupportwp() {
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook( __FILE__, 'deactivate_tripsupportwp' );


if ( class_exists( 'Inc\\Init' ) ) {
    Inc\Init::register_services();
}