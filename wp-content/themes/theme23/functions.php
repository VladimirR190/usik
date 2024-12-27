<?php
function product_showcase_theme_setup() {
    // Поддержка миниатюр
    add_theme_support('post-thumbnails');

    // Регистрация пользовательских полей
    add_action('add_meta_boxes', 'add_product_meta_boxes');
    add_action('save_post', 'save_product_meta');
}
add_action('after_setup_theme', 'product_showcase_theme_setup');

function add_product_meta_boxes() {
    add_meta_box('product_details', 'Детали товара', 'product_meta_box_callback', 'post', 'normal', 'high');
}

function product_meta_box_callback($post) {
    $product_price = get_post_meta($post->ID, 'product_price', true);
    $product_quantity = get_post_meta($post->ID, 'product_quantity', true);
    ?>
    <label for="product_price">Цена:</label>
    <input type="text" id="product_price" name="product_price" value="<?php echo esc_attr($product_price); ?>" /><br>
    
    <label for="product_quantity">Количество:</label>
    <input type="text" id="product_quantity" name="product_quantity" value="<?php echo esc_attr($product_quantity); ?>" /><br>
    <?php
}

function save_product_meta($post_id) {
    if (array_key_exists('product_price', $_POST)) {
        update_post_meta($post_id, 'product_price', sanitize_text_field($_POST['product_price']));
    }
    if (array_key_exists('product_quantity', $_POST)) {
        update_post_meta($post_id, 'product_quantity', sanitize_text_field($_POST['product_quantity']));
    }
}