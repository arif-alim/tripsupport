<?php

namespace Tr\Search;

class Main
{

  public function boot()
  {
    if (!defined('ABSPATH')) {
      exit('you can not access directly');
    }

    $this->init();
    add_action('wp_enqueue_scripts', array((new Enqueue()), 'add'));
    add_action('init', array((new Shortcode()), 'add'));
  }

  public function init()
  {
    register_activation_hook(TRIP_SUPPORT_SEARCH_MAIN_FILE_NAME, array($this, 'active'));
    register_deactivation_hook(TRIP_SUPPORT_SEARCH_MAIN_FILE_NAME, array($this, 'deactivate'));
    register_uninstall_hook(TRIP_SUPPORT_SEARCH_MAIN_FILE_NAME, array(Main::class, 'uninstall'));
  }

  public function active()
  {
    //
  }

  public function deactivate()
  {
    //
  }

  public static function uninstall()
  {
    //
  }
}
