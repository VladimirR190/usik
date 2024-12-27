<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <p>Опубликовано: <?php the_date(); ?></p>
            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; else : ?>
        <p>Запись не найдена.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>