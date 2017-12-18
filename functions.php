<?php

function startwordpress_scripts() {

    $ver = time();

    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.css', false, $ver );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css', false, $ver );
    wp_enqueue_style( 'prettyphoto', get_template_directory_uri() . '/plugins/prettyphoto/css/prettyPhoto.css', false, $ver );
    wp_enqueue_style( 'nivoslider', get_template_directory_uri() . '/plugins/nivoslider/themes/default/default.css', false, $ver );
    wp_enqueue_style( 'nivocustom', get_template_directory_uri() . '/plugins/nivoslider/nivo-slider.css', false, $ver );
    wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.min.css', false, $ver );
    wp_enqueue_style( 'mediaelementplayer', get_template_directory_uri() . '/plugins/mediaelement/mediaelementplayer.css', false, $ver );



    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'prettyphoto', get_template_directory_uri() . '/plugins/prettyphoto/js/prettyphoto.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'helperplugins', get_template_directory_uri() . '/js/helper-plugins.min.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/js/waypoints.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'mediaelementplayer', get_template_directory_uri() . '/plugins/mediaelement/mediaelement-and-player.min.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'nivo', get_template_directory_uri() . '/plugins/nivoslider/jquery.nivo.slider.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'init', get_template_directory_uri() . '/js/init.min.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/plugins/flexslider/js/jquery.flexslider.js', array( 'jquery' ), $ver, true );
    wp_enqueue_script( 'countdown', get_template_directory_uri() . '/plugins/countdown/js/jquery.countdown.min.js', array( 'jquery' ), $ver, true );

}

add_action( 'wp_enqueue_scripts', 'startwordpress_scripts' );

//Remove header tag in favor of the title of the page
add_theme_support( 'title-tag' );


// Support Featured Images
add_theme_support( 'post-thumbnails' );




// Custom News Post Type
function create_news_custom_post() {
    register_post_type( 'news',
        array(
            'labels' => array(
                'name' => __( 'News' ),
                'singular_name' => __( 'News Item' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail'
            )
        ));
}
add_action( 'init', 'create_news_custom_post' );


// Custom Volunteers Post Type
function create_volunteer_custom_post() {
    register_post_type( 'volunteers',
        array(
            'labels' => array(
                'name' => __( 'Board Members' ),
                'singular_name' => __( 'Board Member' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
                'custom-fields'
            )
        ));
}
add_action( 'init', 'create_volunteer_custom_post' );




function oddeven_post_class ( $classes ) {
    global $current_class;
    $classes[] = $current_class;
    $current_class = ($current_class == 'timeline-inverted') ? 'timeline-standard' : 'timeline-inverted';
    return $classes;
}


add_filter ( 'post_class' , 'oddeven_post_class' );
global $current_class;
$current_class = 'timeline-inverted';



// Custom Children Post Type
function create_children_custom_post() {
    register_post_type( 'children',
        array(
            'labels' => array(
                'name' => __( 'Children' ),
                'singular_name' => __( 'Child' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            )
        ));
}
add_action( 'init', 'create_children_custom_post' );


// Custom Children Post Type
function create_events_custom_post() {
    register_post_type( 'events',
        array(
            'labels' => array(
                'name' => __( 'Events' ),
                'singular_name' => __( 'Event' ),
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array(
                'title',
                'editor',
                'thumbnail',
            )
        ));
}
add_action( 'init', 'create_events_custom_post' );