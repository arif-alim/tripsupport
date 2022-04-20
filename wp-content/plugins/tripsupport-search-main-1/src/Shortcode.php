<?php

namespace Tr\Search;

class Shortcode
{
  /**
   * Shortcode constructor.
   */
  public function add()
  {
    add_shortcode('tr_search_by_vue', array($this, 'trSearchPluginShortcodeCallback'));
  }

  public function trSearchPluginShortcodeCallback()
  {
    ob_start();
    require TRIP_SUPPORT_SEARCH_MAIN_FILE_PATH . '/templates/search.php';

    return ob_get_clean();
  }
}
