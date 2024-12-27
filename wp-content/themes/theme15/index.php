<?php get_header(); ?>
<div class="content">
    <h2>Latest News</h2>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="post-item">
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p>Published on: <?php the_date(); ?> by <?php the_author(); ?></p>
            <p><?php the_excerpt(); ?></p>
        </div>
    <?php endwhile; else : ?>
        <p>No news found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>