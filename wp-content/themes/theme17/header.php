<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Показать первую секцию по умолчанию
            document.querySelector("#greeting").style.display = "block";

            // Обработчик клика для навигации
            document.querySelectorAll("nav a").forEach(function(link) {
                link.addEventListener("click", function(event) {
                    event.preventDefault(); // Отменяем стандартное поведение ссылки
                    const targetId = this.getAttribute("href").substring(1); // Получаем ID секции
                    document.querySelectorAll("section").forEach(function(section) {
                        section.style.display = "none"; // Скрываем все секции
                    });
                    document.getElementById(targetId).style.display = "block"; // Показываем выбранную секцию
                });
            });
        });
    </script>
</head>
<body>
    <header>
        <h1><?php bloginfo('name'); ?></h1>
        <nav>
            <a href="#greeting">Приветствие</a>
            <a href="#about">Информация о компании</a>
            <a href="#contact">Контакты</a>
        </nav>
    </header>