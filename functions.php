<?php
add_theme_support('post-thumbnails'); // миниатюры для всех типов постов
add_theme_support('widgets');

add_action('wp_enqueue_scripts', 'connect_style');
add_action('after_setup_theme', 'register_menus');
add_action('widgets_init', 'my_register_sidebar');


function connect_style() {
    // style
    wp_enqueue_style('style', get_stylesheet_uri() );

    // fonts
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Exo+2&family=Montserrat&display=swap', array(), null, 'all');
    wp_enqueue_style('google-fonts');
}

function register_menus() {
    register_nav_menu('top-left-menu', 'Left menu in header');
    register_nav_menu('bottom-categories-menu', 'Display all categories in footer');
    register_nav_menu('footer-second-menu', 'Second menu in footer');
    register_nav_menu('footer-third-menu', 'Third menu in footer');
}

function my_register_sidebar() {
    /* В боковой колонке - первый сайдбар */
    register_sidebar(
        [
            'id' => 'social_icons', // уникальный id
            'name' => 'Top and bottom social icons', // название сайдбара
            'before_widget' => '', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '',
            // 'before_title' => '<h3 class="widget-title">', // по умолчанию заголовки виджетов в <h2>
            // 'after_title' => '</h3>'
        ]
    );
}

?>