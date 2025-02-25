<?php get_header(); ?>

<main>
    <h2>Архив новостей</h2>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_excerpt(); ?></p>
            </article>
        <?php endwhile;
    else : ?>
        <p>Записей не найдено.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>