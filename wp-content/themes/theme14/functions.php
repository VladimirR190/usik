<?php
function recipe_theme_setup()
{
    // Регистрация метаполей для рецептов
    add_action('add_meta_boxes', 'add_recipe_meta_boxes');
    add_action('save_post', 'save_recipe_meta');

    function add_recipe_meta_boxes()
    {
        add_meta_box('recipe_meta', 'Recipe Details', 'recipe_meta_callback', 'post', 'normal', 'high');
    }

    function recipe_meta_callback($post)
    {
        $ingredient_count = get_post_meta($post->ID, 'ingredient_count', true);
        $preparation_time = get_post_meta($post->ID, 'preparation_time', true);
        $difficulty = get_post_meta($post->ID, 'difficulty', true);
        ?>
        <label for="ingredient_count">Number of Ingredients:</label>
        <input type="text" name="ingredient_count" value="<?php echo esc_attr($ingredient_count); ?>" />
        <br>
        <label for="preparation_time">Preparation Time (minutes):</label>
        <input type="text" name="preparation_time" value="<?php echo esc_attr($preparation_time); ?>" />
        <br>
        <label for="difficulty">Difficulty:</label>
        <input type="text" name="difficulty" value="<?php echo esc_attr($difficulty); ?>" />
        <?php
    }

    function save_recipe_meta($post_id)
    {
        if (array_key_exists('ingredient_count', $_POST)) {
            update_post_meta($post_id, 'ingredient_count', $_POST['ingredient_count']);
        }
        if (array_key_exists('preparation_time', $_POST)) {
            update_post_meta($post_id, 'preparation_time', $_POST['preparation_time']);
        }
        if (array_key_exists('difficulty', $_POST)) {
            update_post_meta($post_id, 'difficulty', $_POST['difficulty']);
        }
    }
}
add_action('after_setup_theme', 'recipe_theme_setup');