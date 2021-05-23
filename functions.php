<?php
add_action('wp_enqueue_scripts', 'connect_style');

function connect_style() {
    // style
    wp_enqueue_style('style', get_stylesheet_uri() );

    // fonts
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Exo+2&family=Montserrat&display=swap', array(), null, 'all');
    wp_enqueue_style('google-fonts');
}

?>