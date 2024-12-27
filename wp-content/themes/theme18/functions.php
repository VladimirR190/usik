<?php
function simple_blog_theme_setup() {
    // Поддержка миниатюр
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'simple_blog_theme_setup');