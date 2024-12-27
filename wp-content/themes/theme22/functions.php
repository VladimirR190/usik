<?php
function news_feed_theme_setup() {
    // Поддержка миниатюр
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'news_feed_theme_setup');