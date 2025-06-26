<?php
// components/accordion.php
// Компонент "Аккордеон" для UI-блока

?>

<!-- Контейнер аккордеона -->
<div class="accordion">

    <!-- Первый элемент аккордеона (по умолчанию открыт) -->
    <div class="accordion__item accordion__item--active">
        <!-- Заголовок аккордеона -->
        <button class="accordion__header" type="button">
            <!-- Текст заголовка -->
            <span class="accordion__title">Аккордеон 1</span>
            <!-- Иконка стрелки -->
            <span class="accordion__icon"></span>
        </button>
        <!-- Контент, который раскрывается -->
        <div class="accordion__content" style="display: block;">
            <p>
                <!-- Пример раскрытого текста -->
                Это содержимое первого аккордеона. Здесь может быть любой текст или HTML.
            </p>
        </div>
        <!-- Синяя полоска под активным аккордеоном -->
        <div class="accordion__bar accordion__bar--active"></div>
    </div>

    <!-- Второй элемент аккордеона (по умолчанию закрыт) -->
    <div class="accordion__item">
        <!-- Заголовок аккордеона -->
        <button class="accordion__header" type="button">
            <span class="accordion__title">Аккордеон 2</span>
            <span class="accordion__icon"></span>
        </button>
        <div class="accordion__content">
            <p>
                Это содержимое второго аккордеона.
            </p>
        </div>
        <!-- Серый бар под неактивным аккордеоном -->
        <div class="accordion__bar"></div>
    </div>

    <!-- Третий элемент аккордеона (по умолчанию закрыт) -->
    <div class="accordion__item">
        <button class="accordion__header" type="button">
            <span class="accordion__title">Аккордеон 3</span>
            <span class="accordion__icon"></span>
        </button>
        <div class="accordion__content">
            <p>
                Это содержимое третьего аккордеона.
            </p>
        </div>
        <div class="accordion__bar"></div>
    </div>

</div>

<!-- 
    Комментарии по структуре:
    - .accordion — корневой контейнер компонента
    - .accordion__item — отдельный элемент аккордеона
    - .accordion__item--active — модификатор для открытого аккордеона
    - .accordion__header — кнопка-заголовок аккордеона
    - .accordion__title — текст заголовка
    - .accordion__icon — иконка-стрелка (стилизуется через CSS)
    - .accordion__content — скрываемый/раскрываемый контент
    - .accordion__bar — полоска под аккордеоном (цвет и толщина меняются по состоянию)
    - .accordion__bar--active — модификатор для активной (синей и толстой) полоски

    Для работы аккордеона потребуется JS для переключения классов и управления раскрытием.
    Для стилизации — SCSS в _ui.scss.
-->
