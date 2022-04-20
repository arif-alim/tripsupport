<?php


namespace Inc\Api;
use Inc\Api\Util;
use Inc\Base\BaseController;


class FeaturedVacations extends BaseController
{
    function register()
    {
        add_shortcode('ts_featured_vacations', array( $this, 'mapping_featured_vacations'));
    }

    function get_featured_vacations()
    {
        $url = 'https://vacationapi.tripsupport.ca/api/Vacation/GetFeaturedVacations';
        $response = wp_remote_get( $url);
        $responseBody = wp_remote_retrieve_body( $response);
        $result = json_decode( $responseBody ,true);
        return ($result['data']);
    }


    function mapping_featured_vacations()
    {
        $data=$this->get_featured_vacations();
        $packages= array_keys($data);
//        var_dump($data[$packages[0]]['packageList'][2]['package']['flights']);
        require_once($this->plugin_path."templates/featured-vacations-form.php");
    }


}








