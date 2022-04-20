<?php


namespace Inc\Api;
use Inc\Base\BaseController;


class SearchBox extends BaseController{

	function register()
	{
		add_shortcode('ts_search_box', array( $this, 'mapping_search_box'));
		//add_shortcode('multiple-destinations-vacations', array( $this, 'mapping_search_box'));
	}

	function mapping_search_box()
	{
		//$popup = new SearchBoxVacations();
		//$result = $popup->get_hierarchical_destinations();

		//var_dump($result);
		require_once($this->plugin_path."templates/search-box.php");
		//require_once($this->plugin_path."templates/partials/modal-select-multiple-destinations-vacations.php");
	}
}