<?php get_header(); ?>
<div class="content">
    <h2>Latest News</h2>
    <div class="news">
        <?php
        $args = array('post_type' => 'post', 'posts_per_page' => 3);
        $latest_news = new WP_Query($args);
        if ($latest_news->have_posts()) :
            while ($latest_news->have_posts()) : $latest_news->the_post(); ?>
                <div class="news-item">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile;
        else : ?>
            <p>No news found.</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>

    <h2>Our Services</h2>
    <div class="services">
        <?php
        // Здесь можно использовать пользовательский тип записи для услуг
        $args = array('post_type' => 'service', 'posts_per_page' => 3);
        $services = new WP_Query($args);
        if ($services->have_posts()) :
            while ($services->have_posts()) : $services->the_post(); ?>
                <div class="service-item">
                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p><?php the_excerpt(); ?></p>
                </div>
            <?php endwhile;
        else : ?>
            <p>No services found.</p>
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>
    </div>
</div>
<?php get_footer(); ?>