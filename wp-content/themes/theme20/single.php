<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <p>Язык проекта: <?php echo get_post_meta(get_the_ID(), 'project_language', true); ?></p>
            <p>Версия проекта: <?php echo get_post_meta(get_the_ID(), 'project_version', true); ?></p>
            <p>Ссылка на проект: <a href="<?php echo get_post_meta(get_the_ID(), 'project_url', true); ?>"><?php echo get_post_meta(get_the_ID(), 'project_url', true); ?></a></p>
            <div><?php the_content(); ?></div>
            <?php if (has_post_thumbnail()) {
                the_post_thumbnail('large');
            } ?>
        </article>
    <?php endwhile; else : ?>
        <p>Запись не найдена.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>