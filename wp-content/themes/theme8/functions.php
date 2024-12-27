<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

// Кастомная функция для постраничной навигации
function my_custom_pagination($query) {
    $big = 999999999; // уникальное число для замены
    $pagination_args = array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $query->max_num_pages,
        'prev_text' => __('« Назад'),
        'next_text' => __('Вперед »'),
    );
    echo paginate_links($pagination_args);
}