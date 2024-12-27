<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Регистрация новой таксономии "рейтинг"
function mytheme_register_rating_taxonomy() {
    register_taxonomy('rating', 'post', array(
        'label' => __('Рейтинг'),
        'rewrite' => array('slug' => 'rating'),
        'hierarchical' => true,
    ));
}
add_action('init', 'mytheme_register_rating_taxonomy');

// Регистрация нового сайдбара
function mytheme_register_sidebar() {
    register_sidebar(array(
        'name' => __('Основной сайдбар', 'mytheme'),
        'id' => 'main-sidebar',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action('widgets_init', 'mytheme_register_sidebar');