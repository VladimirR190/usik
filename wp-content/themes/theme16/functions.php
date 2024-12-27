<?php
function photo_gallery_theme_setup() {
    // Регистрация пользовательского типа записи для фотографий
    register_post_type('photo', array(
        'labels' => array(
            'name' => __('Photos'),
            'singular_name' => __('Photo')
        ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
    ));

    // Регистрация таксономий для альбомов и меток
    register_taxonomy('album', 'photo', array(
        'label' => __('Albums'),
        'rewrite' => array('slug' => 'album'),
        'hierarchical' => true,
    ));

    register_taxonomy('photo_tag', 'photo', array(
        'label' => __('Photo Tags'),
        'rewrite' => array('slug' => 'photo-tag'),
        'hierarchical' => false,
    ));
}
add_action('after_setup_theme', 'photo_gallery_theme_setup');