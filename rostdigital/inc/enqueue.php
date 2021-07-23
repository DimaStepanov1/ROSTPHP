<?php

add_action( "admin_head", "rostdigital_admin_style" );

function rostdigital_admin_style() {
    wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css' );
}

add_action( 'wp_enqueue_scripts', 'rostdigital_scripts' );
function rostdigital_scripts(){
    wp_enqueue_style( "swiper-css", 'https://unpkg.com/swiper/swiper-bundle.min.css' );
    wp_enqueue_style( 'Jost', 'https://fonts.googleapis.com/css2?family=Jost:wght@300;400;500;600;700;900&display=swap' );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css' );
    wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media-styles.css' );



    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js');
    wp_enqueue_script( 'swiper-js', 'https://unpkg.com/swiper/swiper-bundle.js');
    wp_enqueue_script( 'main', get_template_directory_uri() . '/script/script.js', array(), '1.0', true );
    wp_enqueue_script( 'scroll', get_template_directory_uri() . '/skroll-master/src/skroll.min.js', array(), '1.0', true );
    wp_enqueue_script( 'hover', get_template_directory_uri() . '/script/hover.js', array(), '1.0', true );
    wp_enqueue_script( 'keis', get_template_directory_uri() . '/script/keis-script.js', array(), '1.0', true );
    wp_enqueue_script( 'contact', get_template_directory_uri() . '/script/contact-script.js', array(), '1.0', true );

}

?>