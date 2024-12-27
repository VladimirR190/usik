<?php
function lesson_schedule_theme_setup() {
    // Поддержка миниатюр
    add_theme_support('post-thumbnails');

    // Регистрация таксономии "неделя"
    register_taxonomy('week', 'post', array(
        'label' => 'Недели',
        'rewrite' => array('slug' => 'week'),
        'hierarchical' => true,
    ));
}
add_action('after_setup_theme', 'lesson_schedule_theme_setup');