<?php
// sections/intro.php
// Вводная секция сайта. Как правило, это первый экран с краткой информацией о проекте, авторе и назначении сайта.

/*
    В этом файле размещаются:
    - Приветствие, краткое описание проекта/портфолио/тестового задания
    - Основная информация о пользователе (ФИО, должность, контакты из config/user.php)
    - Кнопки для перехода к основным разделам (UI Kit, Контакты и др.)
    - Можно добавить иллюстрацию, логотип или фото
    Для стилизации используйте main.scss/_intro.scss
*/

// Подключаем данные пользователя
$user = include __DIR__ . '/../config/user.php';
?>

<section id="intro" class="section section--intro">
    <div class="section__container">
        <div class="intro">
            <div class="intro__content">
                <h1 class="intro__title">
                    Привет! Меня зовут <?= htmlspecialchars($user['fio']) ?>
                </h1>
                <p class="intro__subtitle">
                    <?= htmlspecialchars($user['position']) ?> <br>
                    <?= htmlspecialchars($user['about'] ?? 'Добро пожаловать на мой сайт-портфолио! Здесь вы найдете примеры UI-компонентов, типографику и контактную информацию.') ?>
                </p>
                <div class="intro__contacts">
                    <a href="mailto:<?= htmlspecialchars($user['contacts']['email']) ?>" class="intro__contact-link">
                        <?= htmlspecialchars($user['contacts']['email']) ?>
                    </a>
                    <a href="tel:<?= htmlspecialchars($user['contacts']['phone']) ?>" class="intro__contact-link">
                        <?= htmlspecialchars($user['contacts']['phone']) ?>
                    </a>
                    <?php if (!empty($user['contacts']['telegram'])): ?>
                        <a href="https://t.me/<?= ltrim(htmlspecialchars($user['contacts']['telegram']), '@') ?>" class="intro__contact-link" target="_blank">
                            <?= htmlspecialchars($user['contacts']['telegram']) ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="intro__actions">
                    <a href="#ui" class="ui-button intro__button">UI Kit</a>
                    <a href="#contacts" class="ui-button intro__button ui-button--secondary">Контакты</a>
                </div>
            </div>
            <!-- Можно добавить фото/иллюстрацию -->
            <!-- <div class="intro__image">
                <img src="/images/avatar.jpg" alt="Фото пользователя">
            </div> -->
        </div>
    </div>
</section>

<!-- 
    Краткая навигация по секции:
    - .section--intro — основной контейнер первого экрана
    - .intro__title — крупный заголовок с ФИО
    - .intro__subtitle — краткое описание/позиция
    - .intro__contacts — контакты (email, телефон, telegram)
    - .intro__actions — кнопки перехода к разделам
    - .intro__image — фото или иллюстрация (опционально)
    Для стилизации используйте main.scss/_intro.scss
-->
