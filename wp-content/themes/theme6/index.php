<?php get_header(); ?>

<div class="content">
    <h1>Главная страница</h1>
    
    <?php 
    // Получаем термины таксономии "рейтинг"
    $ratings = get_terms(array(
        'taxonomy' => 'rating',
        'hide_empty' => false,
    ));

    // Выводим записи для каждого рейтинга
    foreach ($ratings as $rating) : ?>
        <h2><?php echo esc_html($rating->name); ?></h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'tax_query' => array(
                array(
                    'taxonomy' => 'rating',
                    'field' => 'term_id',
                    'terms' => $rating->term_id,
                ),
            ),
        );
        $query = new WP_Query($args);
        
        if ($query->have_posts()) : 
            while ($query->have_posts()) : $query->the_post(); ?>
                <div class="post">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p>Автор: <?php the_author(); ?></p>
                    <p>Дата: <?php the_date(); ?></p>
                    <p>Рейтинг: <?php echo esc_html($rating->name); ?></p>
                </div>
            <?php endwhile; 
        else : ?>
            <p>Записей не найдено для этого рейтинга.</p>
        <?php endif; 
        wp_reset_postdata();
    endforeach; ?>
</div>

<?php get_footer(); ?>