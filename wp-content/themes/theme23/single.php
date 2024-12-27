<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('large');
            } ?>
            <p>Цена: <?php echo get_post_meta(get_the_ID(), 'product_price', true); ?> руб.</p>
            <p>Количество: <?php echo get_post_meta(get_the_ID(), 'product_quantity', true); ?></p>
            <div><?php the_content(); ?></div>
        </article>
    <?php endwhile; else : ?>
        <p>Товар не найден.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>