<?php get_header(); ?>

<main>
    <h2>О себе</h2>
    <p>Я разработчик, специализирующийся на создании веб-приложений и сайтов. Вот некоторые из моих проектов:</p>
    
    <h3>Мои проекты</h3>
    <?php
    // Цикл для вывода последних записей
    if (have_posts()) :
        while (have_posts()) : the_post(); ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p>Язык проекта: <?php echo get_post_meta(get_the_ID(), 'project_language', true); ?></p>
                <p>Версия проекта: <?php echo get_post_meta(get_the_ID(), 'project_version', true); ?></p>
                <p><a href="<?php echo get_post_meta(get_the_ID(), 'project_url', true); ?>">Ссылка на проект</a></p>
                <p><?php the_excerpt(); ?></p>
            </article>
        <?php endwhile;
    else : ?>
        <p>Записей не найдено.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>