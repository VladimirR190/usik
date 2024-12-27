<?php get_header(); ?>

<div class="content">
    <h1>Список книг</h1>
    
    <?php 
    // Запрос для получения записей типа "book"
    $args = array(
        'post_type' => 'book',
        'posts_per_page' => -1, // Получить все записи
    );
    $query = new WP_Query($args);
    
    if ($query->have_posts()) : 
        while ($query->have_posts()) : $query->the_post(); ?>
            <div class="book">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p>Автор: <?php the_author(); ?></p>
                <p>Дата: <?php the_date(); ?></p>
            </div>
        <?php endwhile; 
    else : ?>
        <p>Книг не найдено.</p>
    <?php endif; 
    wp_reset_postdata();
    ?>
</div>

<?php get_footer(); ?>