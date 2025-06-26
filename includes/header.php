<?php
// includes/header.php
// Верхний колонтитул (header) сайта. Выводится на всех страницах.

/*
    В этом файле обычно размещают:
    - Логотип или название сайта
    - Навигационное меню (если есть)
    - Имя пользователя и должность (из config/user.php)
    - Контактные данные (опционально)
    - Любые дополнительные элементы по макету
    - Подключение пользовательского шрифта
*/

// Подключаем данные пользователя для вывода в хедере
$user = include __DIR__ . '/../config/user.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестовое фронт</title>
    <!-- Подключение пользовательского шрифта Graphik LCG -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/e7842774e037edf15919037594a79b2b/raw/665bdfc532094318449f1010323c84013d5af953/graphik.css">
    <!-- Подключение основного CSS (main.css) -->
    <link rel="stylesheet" href="/styles/main.css">
</head>
<body>
<header class="site-header">
    <div class="site-header__container">
        <!-- Логотип или название сайта -->
        <div class="site-header__logo">
            <!-- Можно заменить на картинку, если требуется -->
            <span class="site-header__logo-text">Тестовое фронт</span>
        </div>

        <!-- Навигационное меню (если есть, можно добавить пункты) -->
        <nav class="site-header__nav">
            <ul class="site-header__menu">
                <li><a href="/" class="site-header__menu-link">Главная</a></li>
                <li><a href="#ui" class="site-header__menu-link">UI Kit</a></li>
                <li><a href="#contacts" class="site-header__menu-link">Контакты</a></li>
            </ul>
        </nav>

        <!-- Блок пользователя: ФИО и должность -->
        <div class="site-header__user">
            <span class="site-header__user-fio"><?= htmlspecialchars($user['fio']) ?></span>
            <span class="site-header__user-position"><?= htmlspecialchars($user['position']) ?></span>
        </div>
    </div>
</header>

<!-- 
    Комментарии по структуре:
    - .site-header — основной контейнер хедера
    - .site-header__container — обертка для центрирования и отступов
    - .site-header__logo — блок логотипа или названия сайта
    - .site-header__logo-text — текст логотипа (можно заменить на <img>)
    - .site-header__nav — контейнер навигации
    - .site-header__menu — список пунктов меню
    - .site-header__menu-link — ссылка меню
    - .site-header__user — блок пользователя (ФИО и должность)
    - .site-header__user-fio — ФИО пользователя
    - .site-header__user-position — должность пользователя
    Для стилизации использовать main.scss/_header.scss
    Не забудьте закрыть <body> и <
