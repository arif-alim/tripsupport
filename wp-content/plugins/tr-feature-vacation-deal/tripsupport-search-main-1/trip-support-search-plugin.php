<?php

/**
 * plugin name: trip support search plugin
 */

use Tr\Search\Main;

/**
 * define plugin main file directory path
 */
define('TRIP_SUPPORT_SEARCH_MAIN_FILE_PATH', plugin_dir_path(__FILE__));

/**
 * define plugin main file directory path
 */
define('TRIP_SUPPORT_SEARCH_MAIN_FILE_URL', plugin_dir_url(__FILE__));

/**
 * define plugin main file directory path
 */
define('TRIP_SUPPORT_SEARCH_MAIN_FILE_NAME', plugin_basename(__FILE__));

/**
 * require composer autoloader
 */
require TRIP_SUPPORT_SEARCH_MAIN_FILE_PATH . '/vendor/autoload.php';


(new Main)->boot();
