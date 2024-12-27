<?php
function news_portal_theme_setup() {
    // Поддержка комментариев
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'news_portal_theme_setup');