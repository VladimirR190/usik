<?php get_header(); ?>
<div class="content">
    <h2>Search Results for: <?php echo get_search_query(); ?></h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="recipe-item">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; else : ?>
        <p>No recipes found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>