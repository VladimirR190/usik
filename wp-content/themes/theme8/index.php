
<?php get_header(); ?>

<div class="content">
    <h1>Список записей</h1>
    
    <?php 
    // Запрос для получения записей
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 5, // Количество записей на странице
        'paged' => get_query_var('paged') ? get_query_var('paged') : 1, // Поддержка пагинации
    );
    $query = new WP_Query($args);
    
    if ($query->have_posts()) : 
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="post">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p>Автор: <?php the_author(); ?></p>
                <p>Дата: <?php the_date(); ?></p>
            </div>
        <?php endwhile; 
        
        // Подключение функции пагинации
        my_custom_pagination($query);
        
    else : ?>
        <p>Записей не найдено.</p>
    <?php endif; 
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>