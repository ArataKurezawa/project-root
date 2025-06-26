<?php
// includes/footer.php
// Нижний колонтитул (footer) сайта. Выводится на всех страницах.

/*
    В этом файле обычно размещают:
    - Копирайт и год
    - Контактную информацию (почта, телефон)
    - Ссылки на социальные сети (если есть)
    - Любую дополнительную информацию по макету
    - Подключение JS-скриптов (если требуется)
    Данные пользователя можно подгружать из config/user.php
*/

// Подключаем данные пользователя для вывода контактов в футере
$user = include __DIR__ . '/../config/user.php';
?>

<footer class="site-footer">
    <div class="site-footer__container">
        <!-- Копирайт и имя пользователя -->
        <div class="site-footer__copyright">
            &copy; <?= date('Y') ?> <?= htmlspecialchars($user['fio']) ?>.
            Все права защищены.
        </div>

        <!-- Контактная информация -->
        <div class="site-footer__contacts">
            <span class="site-footer__contact">
                Email: <a href="mailto:<?= htmlspecialchars($user['contacts']['email']) ?>">
                    <?= htmlspecialchars($user['contacts']['email']) ?>
                </a>
            </span>
            <span class="site-footer__contact">
                Телефон: <a href="tel:<?= htmlspecialchars($user['contacts']['phone']) ?>">
                    <?= htmlspecialchars($user['contacts']['phone']) ?>
                </a>
            </span>
            <?php if (!empty($user['contacts']['telegram'])): ?>
                <span class="site-footer__contact">
                    Telegram: <a href="https://t.me/<?= ltrim(htmlspecialchars($user['contacts']['telegram']), '@') ?>" target="_blank">
                        <?= htmlspecialchars($user['contacts']['telegram']) ?>
                    </a>
                </span>
            <?php endif; ?>
        </div>

        <!-- Социальные сети или дополнительные ссылки (если есть) -->
        <!--
        <div class="site-footer__socials">
            <a href="#" class="site-footer__social-link">VK</a>
            <a href="#" class="site-footer__social-link">GitHub</a>
        </div>
        -->

    </div>
</footer>

<!-- 
    Комментарии по структуре:
    - .site-footer — основной контейнер футера
    - .site-footer__container — обертка для контента футера (для центрирования и отступов)
    - .site-footer__copyright — копирайт с годом и ФИО
    - .site-footer__contacts — блок с контактной информацией
    - .site-footer__contact — отдельный контакт (email, телефон, telegram)
    - .site-footer__socials — (опционально) блок для ссылок на соцсети
    Для стилизации использовать main.scss/_footer.scss
-->
