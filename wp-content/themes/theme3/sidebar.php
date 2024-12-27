<aside class="sidebar">
    <h2>Сайдбар</h2>
    <h3>Посты в рубрике «Важные»</h3>
    <ul>
        <?php
        $important_posts = new WP_Query(array(
            'category_name' => 'важные', // Замените на слаг вашей рубрики
            'posts_per_page' => 5
        ));
        if ($important_posts->have_posts()):
            while ($important_posts->have_posts()):
                $important_posts->the_post(); ?>
                <li>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </li>
            <?php endwhile;
            wp_reset_postdata();
        else: ?>
            <li>Нет постов в этой рубрике.</li>
        <?php endif; ?>
    </ul>
</aside>