<?php get_header(); ?>

<div class="content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p>Автор: <?php the_author(); ?></p>
        <p>Дата: <?php the_date(); ?></p>
        <p>Рубрика: <?php the_category(', '); ?></p>
        <div><?php the_content(); ?></div>
    <?php endwhile; else : ?>
        <p>Запись не найдена.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>