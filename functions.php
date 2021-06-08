<?php
add_theme_support('post-thumbnails'); // миниатюры для всех типов постов
add_theme_support('widgets');

add_action('wp_enqueue_scripts', 'connect_style');
add_action('after_setup_theme', 'register_menus');
add_action('widgets_init', 'my_register_sidebar');
add_action('wp_footer', 'burger_menu');
do_action('after_setup_theme', 'setup_social_icons_plugin');
add_action('admin_notices', 'my_plugin_notice'); // подсказка об установке плагина Social icons


function connect_style()
{
    // style
    wp_enqueue_style('style', get_stylesheet_uri());

    // fonts
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Exo+2&family=Montserrat&display=swap', array(), null, 'all');
    wp_enqueue_style('google-fonts');
}

function register_menus()
{
    register_nav_menu('top-left-menu', 'Left menu in header');
    register_nav_menu('bottom-left-menu', 'Display all categories in footer');
    register_nav_menu('bottom-center-menu', 'Second menu in footer');
    register_nav_menu('bottom-right-menu', 'Third menu in footer');
    register_nav_menu('mobile-menu', 'Mobile menu');
}

function my_register_sidebar()
{
    /* В боковой колонке - первый сайдбар */
    register_sidebar(
        [
            'id' => 'social_icons', // уникальный id
            'name' => 'Top and bottom social icons', // название сайдбара
            'before_widget' => '', // по умолчанию виджеты выводятся <li>-списком
            'after_widget' => '',
        ]
    );
}

function burger_menu()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('burger-menu', get_template_directory_uri() . '/assets/js/burger-menu.js');
}

function my_plugin_notice()
{
?>
    <div class="notice notice-success is-dismissible">
        <p>For social media icons, install the plugin "Social Icons Widget & Block by WPZOOM". Next, in the "Top and bottom social icons" widget, place the plugin widget with the desired settings.</p>
    </div>
<?php
}

?>