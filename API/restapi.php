<?php
include_once("../wp-load.php");
global $wpdb;
header('Content-type: application/json');

add_action( 'rest_api_init', function () {
        register_rest_route( 'myroutes', '/menu', array(
        'methods' => 'GET',
        'callback' => 'get_menu',
    ) );
});
function get_menu() {
    return wp_get_nav_menu_items('menu');
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'myroutes', '/custom/home-page', array(
        'methods' => 'GET',
        'callback' => 'get_page_data',
        )
    );
});

function get_page_data() {
    $args = array(
        'post_status' => 'publish',
    );
    $posts = get_pages($args);
    foreach ($posts as $key => $post) {
        return $posts[$key]->acf = get_fields($post->ID);
    }
}