<?php
function project_portfolio_theme_setup() {
    // Поддержка миниатюр
    add_theme_support('post-thumbnails');

    // Регистрация пользовательских полей
    add_action('add_meta_boxes', 'add_project_meta_boxes');
    add_action('save_post', 'save_project_meta');
}
add_action('after_setup_theme', 'project_portfolio_theme_setup');

function add_project_meta_boxes() {
    add_meta_box('project_details', 'Детали проекта', 'project_meta_box_callback', 'post', 'normal', 'high');
}

function project_meta_box_callback($post) {
    $project_url = get_post_meta($post->ID, 'project_url', true);
    $project_language = get_post_meta($post->ID, 'project_language', true);
    $project_version = get_post_meta($post->ID, 'project_version', true);
    ?>
    <label for="project_url">URL проекта:</label>
    <input type="text" id="project_url" name="project_url" value="<?php echo esc_attr($project_url); ?>" /><br>
    
    <label for="project_language">Язык проекта:</label>
    <input type="text" id="project_language" name="project_language" value="<?php echo esc_attr($project_language); ?>" /><br>
    
    <label for="project_version">Версия проекта:</label>
    <input type="text" id="project_version" name="project_version" value="<?php echo esc_attr($project_version); ?>" /><br>
    <?php
}

function save_project_meta($post_id) {
    if (array_key_exists('project_url', $_POST)) {
        update_post_meta($post_id, 'project_url', sanitize_text_field($_POST['project_url']));
    }
    if (array_key_exists('project_language', $_POST)) {
        update_post_meta($post_id, 'project_language', sanitize_text_field($_POST['project_language']));
    }
    if (array_key_exists('project_version', $_POST)) {
        update_post_meta($post_id, 'project_version', sanitize_text_field($_POST['project_version']));
    }
}   