<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
    <title><?php wp_title(); ?></title>
</head>
<body>
    <header>
        <h1>Мой сайт</h1>
        <nav>
            <ul>
                <li><a href="<?php echo home_url(); ?>">Главная</a></li>
            </ul>
        </nav>
    </header>