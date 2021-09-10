<?php

function enque_styles_custom(){ /*här finns kod för style*/
    $uri = get_template_directory_uri(); /*eller get_theme_file_uri(); */
    wp_register_style('style', $uri . '/css/style.css', false, '1.1', 'all');
    wp_enqueue_style('bootstrap', $uri . '/css/bootstrap.css');
    wp_enqueue_style('fontawesome', $uri . '/css/font-awesome.css');

    wp_enqueue_style('style');

    wp_enqueue_script('script', $uri . '/js/script.js');
    wp_enqueue_script('jquery', $uri . '/js/jquery.js');
    /*jquery wp_enqueue_script bara, behövs ej specat, spar i head taggen? */
}
add_action('wp_enqueue_scripts', 'enque_styles_custom');

function my_pictures(){
    add_theme_support( 'post-thumbnails' ); /*denna kod behövs för att visa bilder */
}

add_action('after_setup_theme', 'my_pictures');

function register_my_menus(){
    register_nav_menus(
        array(
            'main-menu' => __('Main Menu', 'text_domain'),
            'mobile-menu' => __('Mobile Menu', 'text_domain')
        )
        );
} 
add_action ('init', 'register_my_menus'); 
/*henriks kod after_setup_theme istället för init (sidebar är som menu reister_sidebar (array)) */ 
?>