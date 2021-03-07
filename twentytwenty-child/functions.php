<?php
include('./API/acftorest.php');
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

function child_scripts()
{
    wp_enqueue_style( 'bootstrap-min.css', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), '4.0.0' );
    wp_enqueue_style( 'swiper-min.css', '//unpkg.com/swiper/swiper-bundle.min.css', array(), '4.0.0' );
    wp_enqueue_script( 'jquery', '//code.jquery.com/jquery-3.2.1.slim.min.js', array(), '3.2.1' );
    wp_enqueue_script( 'popper-min', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array(), '1.12.9' );
    wp_enqueue_script( 'bootstrap-min.js', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', array(), '4.0.0' );
    wp_enqueue_script( 'swiper-min.js', '//unpkg.com/swiper/swiper-bundle.min.js', array(), '4.0.0' );
}

add_action( 'wp_enqueue_scripts', 'child_scripts' );