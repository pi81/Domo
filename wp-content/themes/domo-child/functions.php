<?php
add_action( 'wp_enqueue_scripts', 'domo_enqueue_styles' );
function domo_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/public/main.js', array() );
    //Load Font Awesome
    wp_enqueue_style( 'fontawesome','https://use.fontawesome.com/releases/v5.9.0/css/all.css');
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


if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5cd4248c1c150',
        'title' => 'Boxes',
        'fields' => array(
            array(
                'key' => 'field_5cd42497121f9',
                'label' => 'id_cards',
                'name' => 'id_cards',
                'type' => 'number',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_5cd424a3121fa',
                'label' => 'name',
                'name' => 'name',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5cd424ad121fb',
                'label' => 'status',
                'name' => 'status',
                'type' => 'true_false',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 0,
                'ui_on_text' => '',
                'ui_off_text' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'boxes',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5cd4236d7f7b5',
        'title' => 'Cards',
        'fields' => array(
            array(
                'key' => 'field_5cd4237a4d8f6',
                'label' => 'id_emoji',
                'name' => 'id_emoji',
                'type' => 'number',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
            array(
                'key' => 'field_5cd423ad4d8f7',
                'label' => 'receiver',
                'name' => 'receiver',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5cd4247153d84',
                'label' => 'sender',
                'name' => 'sender',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5cd4247953d85',
                'label' => 'desc',
                'name' => 'desc',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'cards',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5cd424c172fa6',
        'title' => 'Emoji',
        'fields' => array(
            array(
                'key' => 'field_5cd424c758a2d',
                'label' => 'name',
                'name' => 'name',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5cd424ce58a2e',
                'label' => 'url',
                'name' => 'url',
                'type' => 'url',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'emoji',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

endif;

