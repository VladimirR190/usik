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
        <?php get_search_form(); // Подключаем форму поиска ?>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
    </header>