<?php
function corporate_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu')
    ));
    
    // Регистрация пользовательского типа записи для услуг
    register_post_type('service', array(
        'labels' => array(
            'name' => __('Services'),
            'singular_name' => __('Service')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
    ));
}
add_action('after_setup_theme', 'corporate_theme_setup'); // Исправлено здесь