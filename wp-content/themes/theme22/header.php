<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?></title>
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <nav>
            <a href="<?php echo home_url(); ?>">Главная</a>
            <a href="<?php echo get_permalink(get_option('page_for_posts')); ?>">Новости</a>
        </nav>
    </header>