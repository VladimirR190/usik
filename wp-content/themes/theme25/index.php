<?php get_header(); ?>

<main>
    <h2>Все посты</h2>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="post">
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p>Дата: <?php the_date(); ?> | Автор: <?php the_author(); ?></p>
            </div>
        <?php endwhile;
    else : ?>
        <p>Постов не найдено.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>