<?php
function mytheme_enqueue_styles()
{
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Регистрация меню
function register_my_menu()
{
    register_nav_menus(array( // Изменено для поддержки нескольких меню
        'header-menu' => __('Меню в заголовке'),
        'footer-menu' => __('Меню в подвале'), // Пример добавления второго меню
    ));
}
add_action('init', 'register_my_menu');