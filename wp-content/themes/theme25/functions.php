<?php
function related_posts_theme_setup() {
    // Поддержка миниатюр
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'related_posts_theme_setup');