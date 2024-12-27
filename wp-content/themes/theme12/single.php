<?php get_header(); ?>
<div class="single-product">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p>Price: <?php echo get_post_meta(get_the_ID(), 'price', true); ?> $</p>
        <p>Quantity: <?php echo get_post_meta(get_the_ID(), 'quantity', true); ?></p>
        <div><?php the_content(); ?></div>
    <?php endwhile; else : ?>
        <p>No product found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>