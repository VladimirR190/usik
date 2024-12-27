<?php
function simple_company_theme_setup() {
    // Поддержка миниатюр
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'simple_company_theme_setup');