<?php
function simple_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu')
    ));
}
add_action('after_setup_theme', 'simple_theme_setup');