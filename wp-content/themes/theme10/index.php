<?php get_header(); ?>
<div class="posts">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <p>Published on <?php the_date(); ?> by <?php the_author(); ?></p>
            <p><?php the_excerpt(); ?></p>
        </article>
    <?php endwhile; else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>