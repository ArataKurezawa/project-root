<?php
// components/select.php
// Компонент "Выпадающий список (Select)" для UI-блока

/*
    Варианты селекта:
    - Обычный (выбран элемент по умолчанию)
    - Открытый (выпадающее меню, для демонстрации добавить класс .ui-select--open)
    - Disabled (заблокирован)
    - С ошибкой (если требуется по макету)
*/

/*
    Для стилизации используются классы:
    - .ui-select — корневой контейнер селекта
    - .ui-select__field — скрытый select (для доступности)
    - .ui-select__current — отображение выбранного значения
    - .ui-select__icon — иконка стрелки (через CSS или SVG)
    - .ui-select__dropdown — выпадающее меню с вариантами
    - .ui-select__option — отдельный пункт меню
    - .ui-select--open — модификатор для открытого меню
    - .ui-select--disabled — модификатор для заблокированного состояния
    - .ui-select--error — модификатор для состояния ошибки
    Для работы требуется JS (CustomSelect.js)
*/
?>

<!-- Обычный селект (выбран элемент по умолчанию) -->
<div class="ui-select">
    <!-- Скрытый нативный select для доступности -->
    <select class="ui-select__field" name="city" id="city1">
        <option value="" disabled selected>Выберите город</option>
        <option value="moscow">Москва</option>
        <option value="spb">Санкт-Петербург</option>
        <option value="novosibirsk">Новосибирск</option>
    </select>
    <!-- Отображение выбранного значения -->
    <div class="ui-select__current">Выберите город</div>
    <!-- Иконка стрелки -->
    <span class="ui-select__icon"></span>
    <!-- Выпадающее меню -->
    <div class="ui-select__dropdown">
        <div class="ui-select__option" data-value="moscow">Москва</div>
        <div class="ui-select__option" data-value="spb">Санкт-Петербург</div>
        <div class="ui-select__option" data-value="novosibirsk">Новосибирск</div>
    </div>
</div>

<!-- Открытый селект (для теста добавить класс .ui-select--open) -->
<div class="ui-select ui-select--open">
    <select class="ui-select__field" name="city" id="city2">
        <option value="" disabled selected>Выберите город</option>
        <option value="moscow">Москва</option>
        <option value="spb">Санкт-Петербург</option>
        <option value="novosibirsk">Новосибирск</option>
    </select>
    <div class="ui-select__current">Москва</div>
    <span class="ui-select__icon"></span>
    <div class="ui-select__dropdown">
        <div class="ui-select__option" data-value="moscow">Москва</div>
        <div class="ui-select__option" data-value="spb">Санкт-Петербург</div>
        <div class="ui-select__option" data-value="novosibirsk">Новосибирск</div>
    </div>
</div>

<!-- Disabled селект (заблокирован) -->
<div class="ui-select ui-select--disabled">
    <select class="ui-select__field" name="city" id="city3" disabled>
        <option value="" disabled selected>Выберите город</option>
        <option value="moscow">Москва</option>
        <option value="spb">Санкт-Петербург</option>
        <option value="novosibirsk">Новосибирск</option>
    </select>
    <div class="ui-select__current">Выберите город</div>
    <span class="ui-select__icon"></span>
    <div class="ui-select__dropdown">
        <div class="ui-select__option" data-value="moscow">Москва</div>
        <div class="ui-select__option" data-value="spb">Санкт-Петербург</div>
        <div class="ui-select__option" data-value="novosibirsk">Новосибирск</div>
    </div>
</div>

<!-- Селект с ошибкой -->
<div class="ui-select ui-select--error">
    <select class="ui-select__field" name="city" id="city4">
        <option value="" disabled selected>Выберите город</option>
        <option value="moscow">Москва</option>
        <option value="spb">Санкт-Петербург</option>
        <option value="novosibirsk">Новосибирск</option>
    </select>
    <div class="ui-select__current">Ошибка выбора</div>
    <span class="ui-select__icon"></span>
    <div class="ui-select__dropdown">
        <div class="ui-select__option" data-value="moscow">Москва</div>
        <div class="ui-select__option" data-value="spb">Санкт-Петербург</div>
        <div class="ui-select__option" data-value="novosibirsk">Новосибирск</div>
    </div>
    <!-- Сообщение об ошибке -->
    <div class="ui-select__error">Пожалуйста, выберите город</div>
</div>

<!-- 
    Комментарии по структуре:
    - .ui-select — обёртка кастомного селекта
    - .ui-select__field — скрытый нативный select для доступности и отправки формы
    - .ui-select__current — отображает выбранное значение
    - .ui-select__icon — стрелка (рисуется через CSS или SVG)
    - .ui-select__dropdown — контейнер с вариантами выбора (открывается по клику)
    - .ui-select__option — отдельный вариант в меню (выбор через JS)
    - .ui-select--open — селект открыт (выпадающее меню видно)
    - .ui-select--disabled — селект заблокирован (disabled)
    - .ui-select--error — ошибка выбора (красная рамка, текст ошибки)
    - .ui-select__error — сообщение об ошибке
    Для стилизации использовать _ui.scss, для логики — CustomSelect.js (открытие, выбор, синхронизация с select)
-->
