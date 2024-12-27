<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Регистрация нового типа записи "book"
function mytheme_register_book_post_type() {
    register_post_type('book', array(
        'labels' => array(
            'name' => __('Книги'),
            'singular_name' => __('Книга'),
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'author', 'thumbnail', 'excerpt'),
        'rewrite' => array('slug' => 'books'),
    ));
}
add_action('init', 'mytheme_register_book_post_type');