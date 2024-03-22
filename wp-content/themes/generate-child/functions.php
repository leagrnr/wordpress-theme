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