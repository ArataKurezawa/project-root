<?php
// includes/sidebar.php
// Боковая панель (sidebar) сайта. Может использоваться для дополнительной навигации, ссылок или информации.

/*
    В этом файле обычно размещают:
    - Навигационные ссылки по разделам сайта или страницы
    - Быстрые ссылки на UI-компоненты, примеры, документацию
    - Контактную информацию или виджеты (по макету)
    - Любые дополнительные элементы, которые не входят в header/footer
    - Можно использовать для закрепления меню при прокрутке
    Для стилизации sidebar использовать main.scss/_sidebar.scss
*/
?>

<aside class="site-sidebar">
    <nav class="site-sidebar__nav">
        <ul class="site-sidebar__menu">
            <!-- Ссылки на основные разделы сайта -->
            <li class="site-sidebar__menu-item">
                <a href="#intro" class="site-sidebar__menu-link">Введение</a>
            </li>
            <li class="site-sidebar__menu-item">
                <a href="#grid" class="site-sidebar__menu-link">Сетка</a>
            </li>
            <li class="site-sidebar__menu-item">
                <a href="#typography" class="site-sidebar__menu-link">Типографика</a>
            </li>
            <li class="site-sidebar__menu-item">
                <a href="#ui" class="site-sidebar__menu-link">UI Kit</a>
            </li>
            <li class="site-sidebar__menu-item">
                <a href="#contacts" class="site-sidebar__menu-link">Контакты</a>
            </li>
        </ul>
    </nav>

    <!-- Дополнительный блок (например, контакты или полезные ссылки) -->
    <div class="site-sidebar__extra">
        <p class="site-sidebar__extra-title">Полезные ссылки</p>
        <ul class="site-sidebar__extra-list">
            <li><a href="https://www.figma.com/" target="_blank" class="site-sidebar__extra-link">Figma</a></li>
            <li><a href="https://developer.mozilla.org/ru/" target="_blank" class="site-sidebar__extra-link">MDN Docs</a></li>
            <li><a href="https://css-tricks.com/" target="_blank" class="site-sidebar__extra-link">CSS-Tricks</a></li>
        </ul>
    </div>
</aside>

<!-- 
    Комментарии по структуре:
    - .site-sidebar — основной контейнер боковой панели
    - .site-sidebar__nav — навигационный блок (меню)
    - .site-sidebar__menu — список основных ссылок
    - .site-sidebar__menu-item — пункт меню
    - .site-sidebar__menu-link — ссылка на раздел
    - .site-sidebar__extra — дополнительный блок (например, полезные ссылки или контакты)
    - .site-sidebar__extra-title — заголовок дополнительного блока
    - .site-sidebar__extra-list — список дополнительных ссылок
    - .site-sidebar__extra-link — ссылка на внешний ресурс
    Для стилизации использовать main.scss/_sidebar.scss
-->
