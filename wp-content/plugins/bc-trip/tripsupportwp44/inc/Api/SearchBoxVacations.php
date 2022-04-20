<?php


namespace Inc\Api;


use Inc\Base\BaseController;

class SearchBoxVacations extends BaseController {

	function register()
	{
		add_action('wp_ajax_get_departures', [$this,'get_departures']);
		add_action('wp_ajax_nopriv_get_departures', [$this,'get_departures']);

		add_action('wp_ajax_get_destinations', [$this,'get_destinations']);
		add_action('wp_ajax_nopriv_get_destinations', [$this,'get_destinations']);

		add_action('wp_ajax_get_hierarchical_destinations', [$this,'get_hierarchical_destinations']);
		add_action('wp_ajax_nopriv_get_hierarchical_destinations', [$this,'get_hierarchical_destinations']);
	}

	function get_departures()
	{
		$url = 'https://vacationapi.tripsupport.ca/api/Resource/GetDepartures';
		$response = wp_remote_get( $url);
		$responseBody = wp_remote_retrieve_body( $response);
		$result = json_decode( $responseBody ,true);
		echo json_encode($result['data']);
		wp_die();
	}

	function get_destinations()
	{
		$departure_code=$_POST['codes'];
		$url = 'https://vacationapi.tripsupport.ca/api/Resource/GetDestinations?codes='.$departure_code;
		$response = wp_remote_get( $url);
		$responseBody = wp_remote_retrieve_body( $response);
		$result = json_decode( $responseBody ,true);
		echo json_encode($result['data']);
		wp_die();
	}

	function get_hierarchical_destinations()
	{
		$destination_code=$_POST['codes'];
		$destination_name=$_POST['name'];
		$url = 'https://vacationapi.tripsupport.ca/api/Resource/GetHierarchicalDestinations?code='.$destination_code;
		$response = wp_remote_get( $url);
		$responseBody = wp_remote_retrieve_body( $response);
		$result1 = json_decode( $responseBody ,true);
		$destination=['code'=>$destination_code,
			          'name'=>$destination_name];
		$result =array_merge($result1['data'],$destination);

		ob_start();

		include($this->plugin_path."templates/partials/modal-select-multiple-destinations-vacations.php");
		$mus= ob_get_clean();
		wp_send_json($mus);
		//return ($data);
//		echo json_encode($result['data']);
//		wp_die();
	}


}