<?php get_header(); ?>

<main>
    <h2>Данные пользователя</h2>
    <?php
    // Получаем данные текущего пользователя
    $current_user = wp_get_current_user();
    
    if ($current_user->exists()) {
        echo '<p>Имя: ' . esc_html($current_user->display_name) . '</p>';
        echo '<p>Email: ' . esc_html($current_user->user_email) . '</p>';
        echo '<p>Роль: ' . esc_html(implode(', ', $current_user->roles)) . '</p>';
    } else {
        echo '<p>Пользователь не авторизован.</p>';
    }
    ?>
</main>

<?php get_footer(); ?>
