<?php
include_once("../wp-load.php");
global $wpdb;
header('Content-type: application/json');

add_action( 'rest_api_init', function () {
        register_rest_route( 'myroutes', '/menu', array(
        'methods' => 'GET',
        'callback' => 'get_menu',
    ) );
 } );
 add_action( 'rest_api_init', function () {
    register_rest_route( 'my_endpoint/v1', '/acfdata', array(
        'methods' => 'GET',
        'callback' => 'get_all_data',
        )
    );
}
);