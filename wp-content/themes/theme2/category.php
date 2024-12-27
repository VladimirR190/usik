<?php get_header(); ?>

<div class="content">
    <h1>Записи в категории: <?php single_cat_title(); ?></h1>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_excerpt(); ?></div>
    <?php endwhile; ?>
        <div class="navigation">
            <?php previous_posts_link('Предыдущие записи'); ?>
            <?php next_posts_link('Следующие записи'); ?>
        </div>
    <?php else : ?>
        <p>Записей не найдено.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>