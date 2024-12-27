<?php get_header(); ?>
<div class="posts">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><?php the_title(); ?></h2>
            <p>Published on <?php the_date(); ?> by <?php the_author(); ?></p>
            <?php if (get_post_type() === 'post') : ?>
                <div><?php the_content(); ?></div> <!-- Выводим содержание, если тип записи 'post' -->
            <?php else : ?>
                <p>This is not a post type.</p> <!-- Сообщение для других типов записей -->
            <?php endif; ?>
        </article>
    <?php endwhile; else : ?>
        <p>No posts found.</p>
    <?php endif; ?>
</div>
<?php get_footer(); ?>