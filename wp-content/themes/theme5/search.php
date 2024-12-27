<?php get_header(); ?>

<div class="content">
    <h1>Результаты поиска для: <?php echo get_search_query(); ?></h1>
    
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p>Автор: <?php the_author(); ?></p>
            <p>Дата: <?php the_date(); ?></p>
            <p>Рубрики: <?php the_category(', '); ?></p>
            <div><?php the_excerpt(); ?></div>
        </div>
    <?php endwhile; else : ?>
        <p>Записей не найдено.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>