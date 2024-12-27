<?php get_header(); ?>
<div class="single-photo">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div><?php the_post_thumbnail('large'); ?></div>
        <p>Published on: <?php the_date(); ?></p>
        <p><?php the_content(); ?></p>
        <h3>Albums:</h3>
        <p><?php the_terms(get_the_ID(), 'album', '', ', '); ?></p>
        <h3>Tags:</h3>
        <p><?php the_terms(get_the_ID(), 'photo_tag', '', ', '); ?></p>
        
        <h3>Comments</h3>
        <?php
        // Вывод комментариев
        if (comments_open() || get_comments_number()) {
            comments_template();
        }
        ?>
    <?php endwhile; else : ?>
        <p>No photo found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>