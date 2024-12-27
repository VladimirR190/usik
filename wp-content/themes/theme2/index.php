<?php get_header(); ?>

<div class="content">
    <h1>Главная страница</h1>

    <!-- Отображение категорий -->
    <div class="categories">
        <h2>Категории</h2>
        <ul>
            <?php
            $categories = get_categories();
            foreach ($categories as $category): ?>
                <li>
                    <a href="<?php echo get_category_link($category->term_id); ?>">
                        <?php echo $category->name; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <?php if (have_posts()):
        while (have_posts()):
            the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <div><?php the_excerpt(); ?></div>
        <?php endwhile; else: ?>
        <p>Записей не найдено.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>