<?php


namespace Inc\Api;


use Inc\Base\BaseController;

class SearchBoxFlights extends BaseController {
	function register()
	{
		add_action('wp_ajax_get_flights_round_trip', [$this,'get_flights_round_trip']);
		add_action('wp_ajax_nopriv_get_flights_round_trip', [$this,'get_flights_round_trip']);
	}

	function get_flights_round_trip()
	{
		$round_trip_code=$_POST['code'];
		if(empty($round_trip_code)) return;
		$url = 'https://search.tripsupport.ca/api/searchairports?searchvalue='.$round_trip_code;
		$response = wp_remote_get( $url);
		$responseBody = wp_remote_retrieve_body( $response);
		$result = json_decode( $responseBody ,true);
		echo json_encode($result);
		wp_die();
	}
}