<?php
function simple_shop_theme_setup() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu')
    ));
    
    // Регистрация метаполей для товаров
    add_action('add_meta_boxes', 'add_product_meta_boxes');
    add_action('save_post', 'save_product_meta');

    function add_product_meta_boxes() {
        add_meta_box('product_meta', 'Product Details', 'product_meta_callback', 'post', 'normal', 'high');
    }

    function product_meta_callback($post) {
        $price = get_post_meta($post->ID, 'price', true);
        $quantity = get_post_meta($post->ID, 'quantity', true);
        ?>
        <label for="price">Price:</label>
        <input type="text" name="price" value="<?php echo esc_attr($price); ?>" />
        <br>
        <label for="quantity">Quantity:</label>
        <input type="text" name="quantity" value="<?php echo esc_attr($quantity); ?>" />
        <?php
    }

    function save_product_meta($post_id) {
        if (array_key_exists('price', $_POST)) {
            update_post_meta($post_id, 'price', $_POST['price']);
        }
        if (array_key_exists('quantity', $_POST)) {
            update_post_meta($post_id, 'quantity', $_POST['quantity']);
        }
    }
}
add_action('after_setup_theme', 'simple_shop_theme_setup'); 