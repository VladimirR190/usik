<?php get_header(); ?>
<div class="single-recipe">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_content(); ?></div>
        <p>Ingredients Count: <?php echo get_post_meta(get_the_ID(), 'ingredient_count', true); ?></p>
        <p>Preparation Time: <?php echo get_post_meta(get_the_ID(), 'preparation_time', true); ?> minutes</p>
        <p>Difficulty: <?php echo get_post_meta(get_the_ID(), 'difficulty', true); ?></p>
    <?php endwhile; else : ?>
        <p>No recipe found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>