<?php
include('./API/restapi.php');

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function get_menu() {
    return wp_get_nav_menu_items('menu');
}

function get_all_data($request){
    $posts = get_pages([
        'post_status' => 'publish'
    ]);
    $controller = new WP_REST_Posts_Controller('post');
    $array = [];
    foreach ( $posts as $post ) {
        $data = $controller->prepare_item_for_response($post,$request);
        $array[] = $controller->prepare_response_for_collection($data);
    } 
    return $array;
}
?>