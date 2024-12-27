<?php
function simple_blog_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu')
    ));
}
add_action('after_setup_theme', 'simple_blog_theme_setup');