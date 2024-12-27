<?php get_header(); ?>

<main>
    <h2>Витрина товаров</h2>
    <?php
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <div class="product">
                <?php if (has_post_thumbnail()) {
                    the_post_thumbnail('medium');
                } ?>
                <h3><?php the_title(); ?></h3>
                <p>Цена: <?php echo get_post_meta(get_the_ID(), 'product_price', true); ?> руб.</p>
                <p>Количество: <?php echo get_post_meta(get_the_ID(), 'product_quantity', true); ?></p>
                <a href="<?php the_permalink(); ?>">Подробнее</a>
            </div>
        <?php endwhile;
    else : ?>
        <p>Товаров не найдено.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>