<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

// Our custom post type function
function create_posttype() {

    register_post_type( 'Emoji',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Emoji' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'emoji'),
        )
    );

    register_post_type( 'Boxes',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Boxes', 'cpt' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Boxes'),
        )
    );

    register_post_type( 'Cards',
        // CPT Options
        array(
            'labels' => array(
                'name' => __( 'Cards', 'cpt' ),
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Cards'),
        )
    );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );

?>