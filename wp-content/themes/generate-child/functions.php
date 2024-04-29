<?php   

function add_widget_zone() {

    register_sidebar( array(
        'name' => 'Homepage Top',
        'id' => 'widget-homepage-1',
        'show_in_rest' => true,
        'before_widget' => '<div class="widget-homepage-1">',
        'after_widget' => '</div>',
    ) );
}

add_action( 'widgets_init', 'add_widget_zone' );

function create_custom_post_type() {
    
    $labels = array(
        'name' => 'Racoon Gang',
        'singular_name' => 'Racoon in the truck',
        'add_new' => 'Add New Racoon',
        'all_items' => 'All Racoon Gang',
    );


    $arguments = array(
        'labels' => $labels,
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
        'menu_position' => 1,
        'menu_icon' => 'dashicons-buddicons-activity',
    );

    register_post_type('racoon', $arguments);
}

add_action('init', 'create_custom_post_type');