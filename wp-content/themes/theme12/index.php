<?php get_header(); ?>
<div class="products">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p><?php the_excerpt(); ?></p>
            <p>Price: <?php echo get_post_meta(get_the_ID(), 'price', true); ?> $</p>
            <p>Quantity: <?php echo get_post_meta(get_the_ID(), 'quantity', true); ?></p>
        </article>
    <?php endwhile; else : ?>
        <p>No products found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>