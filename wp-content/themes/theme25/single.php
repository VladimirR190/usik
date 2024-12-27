<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <p>Дата: <?php the_date(); ?> | Автор: <?php the_author(); ?></p>
            <div><?php the_content(); ?></div>
        </article>

        <div class="related-posts">
            <h3>Похожие посты</h3>
            <?php
            $current_post_title = get_the_title();
            $related_posts = new WP_Query(array(
                'post_type' => 'post',
                'posts_per_page' => 5,
                'post__not_in' => array(get_the_ID()),
                's' => $current_post_title // Поиск по заголовку
            ));

            if ($related_posts->have_posts()) :
                while ($related_posts->have_posts()) : $related_posts->the_post(); ?>
                    <div class="post">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    </div>
                <?php endwhile;
            else : ?>
                <p>Нет похожих постов.</p>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    <?php endwhile; else : ?>
        <p>Пост не найден.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>