<?php

namespace Tr\Search;

class Enqueue
{
  public function add()
  {
    $this->pluginMainFileJs();
  }

  public function pluginMainFileJs()
  {
    wp_register_script('tr_search_main_js', TRIP_SUPPORT_SEARCH_MAIN_FILE_URL . 'assets/dist/main.bundle.js', [], '4.6.19', true);
    wp_enqueue_script('tr_search_main_js');

    return $this;
  }
}
