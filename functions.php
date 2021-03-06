<?php

function enque_styles_custom(){ /*här finns kod för style*/
    $uri = get_template_directory_uri(); /*eller get_theme_file_uri(); */
    wp_register_style('style', $uri . '/css/style.css', false, '1.1', 'all');
    wp_enqueue_style('bootstrap', $uri . '/css/bootstrap.css');
    wp_enqueue_style('fontawesome', $uri . '/css/font-awesome.css');

    wp_enqueue_style('style'); /*style har först registrerats*/ 

    wp_enqueue_script('script', $uri . '/js/script.js');
    wp_enqueue_script('jquery', $uri . '/js/jquery.js');
}
add_action('wp_enqueue_scripts', 'enque_styles_custom');

function my_pictures(){
    add_theme_support( 'post-thumbnails' ); /*denna kod behövs för att visa bilder */
}

add_action('after_setup_theme', 'my_pictures');

function content_length($length) { 
    return 80;
    } 
    /*denna kod reglerar hur många ord som visas på samlingssidan för blogginlägg  */
    add_filter('excerpt_length', 'content_length');

function register_my_menus(){ /*kod för att skapa fungerande, klickbara menyer*/
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'text_domain'),
            'mobile-menu' => __('Mobile Menu', 'text_domain'),
            'undersida-menu' => __('Undersida Menu', 'text_domain'),
            'sidebar-menu' => __('Sidebar Menu', 'text_domain')
        )
        );
} 
add_action ('init', 'register_my_menus'); 
/*sidebar hade även gått att skapa med register_sidebar (array)*/ 

?>