<?php get_header(); ?>
<div class="content">
    <h2>Photo Gallery</h2>
    <?php
    $args = array(
        'post_type' => 'photo', // Пользовательский тип записи для фотографий
        'posts_per_page' => -1, // Вывод всех фотографий
    );
    $photos = new WP_Query($args);
    if ($photos->have_posts()) : ?>
        <div class="gallery">
            <?php while ($photos->have_posts()) : $photos->the_post(); ?>
                <div class="gallery-item">
                    <a href="<?php the_permalink(); ?>">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('medium');
                        } else {
                            echo '<img src="' . get_template_directory_uri() . '/path/to/default-image.jpg" alt="No Image" />'; // Замените на путь к изображению по умолчанию
                        } ?>
                    </a>
                    <h3><?php the_title(); ?></h3>
                    <p><?php the_terms(get_the_ID(), 'album', 'Albums: ', ', '); // Вывод альбомов ?></p>
                    <p><?php the_terms(get_the_ID(), 'photo_tag', 'Tags: ', ', '); // Вывод меток ?></p>
                </div>
            <?php endwhile; ?>
        </div>
    <?php else : ?>
        <p>No photos found.</p>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>
</div>
<?php get_footer(); ?>