<?php get_header(); ?>
<div class="single-post">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <p>Published on: <?php the_date(); ?> by <?php the_author(); ?></p>
        <div><?php the_content(); ?></div>

        <h3>Comments</h3>
        <?php
        // Вывод комментариев
        if (comments_open() || get_comments_number()) {
            comments_template();
        }
        ?>
    <?php endwhile; else : ?>
        <p>No post found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>