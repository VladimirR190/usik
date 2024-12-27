<?php get_header(); ?>

<main>
    <h2>Расписание уроков</h2>
    <?php
    // Получаем все посты с термином "неделя"
    $args = array(
        'post_type' => 'post',
        'tax_query' => array(
            array(
                'taxonomy' => 'week',
                'field'    => 'slug',
                'terms'    => 'неделя', // Замените на нужный термин
            ),
        ),
    );

    $week_posts = new WP_Query($args);

    if ($week_posts->have_posts()) :
        while ($week_posts->have_posts()) : $week_posts->the_post(); ?>
            <div class="week">
                <h3><?php the_title(); ?></h3>
                <div><?php the_content(); ?></div>
            </div>
        <?php endwhile;
    else : ?>
        <p>Расписание не найдено.</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</main>

<?php get_footer(); ?>