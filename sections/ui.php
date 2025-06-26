<?php
// sections/ui.php
// Раздел "UI Kit": демонстрация всех UI-компонентов проекта с примерами использования и структурой

/*
    В этом файле размещаются:
    - Примеры всех кастомных UI-компонентов (кнопки, чекбоксы, радиокнопки, select, input, аккордеон и др.)
    - Для каждого компонента: заголовок, краткое описание, пример использования, структура HTML
    - Можно добавить интерактивные playground'ы для тестирования
    Для стилизации используйте main.scss/_ui.scss
*/
?>

<section id="ui" class="section section--ui">
    <div class="section__container">
        <h2 class="section__title">UI Kit</h2>
        <p class="section__subtitle">Библиотека пользовательских интерфейсных компонентов</p>

        <!-- Кнопки -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">Кнопки</h3>
            <button class="ui-button">Обычная кнопка</button>
            <button class="ui-button" disabled>Disabled</button>
            <button class="ui-button" data-loading="true">Loading</button>
            <pre class="ui-demo__code">
&lt;button class="ui-button"&gt;Обычная кнопка&lt;/button&gt;
&lt;button class="ui-button" disabled&gt;Disabled&lt;/button&gt;
&lt;button class="ui-button" data-loading="true"&gt;Loading&lt;/button&gt;
            </pre>
        </div>

        <!-- Чекбоксы -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">Чекбоксы</h3>
            <label class="ui-checkbox">
                <input type="checkbox" class="ui-checkbox__input" checked>
                <span class="ui-checkbox__box">
                    <span class="ui-checkbox__check"></span>
                </span>
                <span class="ui-checkbox__label-text">Чекбокс (checked)</span>
            </label>
            <label class="ui-checkbox">
                <input type="checkbox" class="ui-checkbox__input">
                <span class="ui-checkbox__box">
                    <span class="ui-checkbox__check"></span>
                </span>
                <span class="ui-checkbox__label-text">Чекбокс</span>
            </label>
            <label class="ui-checkbox">
                <input type="checkbox" class="ui-checkbox__input" disabled>
                <span class="ui-checkbox__box">
                    <span class="ui-checkbox__check"></span>
                </span>
                <span class="ui-checkbox__label-text">Disabled</span>
            </label>
            <pre class="ui-demo__code">
&lt;label class="ui-checkbox"&gt;
    &lt;input type="checkbox" class="ui-checkbox__input" checked&gt;
    &lt;span class="ui-checkbox__box"&gt;
        &lt;span class="ui-checkbox__check"&gt;&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="ui-checkbox__label-text"&gt;Чекбокс&lt;/span&gt;
&lt;/label&gt;
            </pre>
        </div>

        <!-- Радиокнопки -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">Радиокнопки</h3>
            <label class="ui-radio">
                <input type="radio" name="demo-radio" class="ui-radio__input" checked>
                <span class="ui-radio__circle">
                    <span class="ui-radio__dot"></span>
                </span>
                <span class="ui-radio__label-text">Вариант 1</span>
            </label>
            <label class="ui-radio">
                <input type="radio" name="demo-radio" class="ui-radio__input">
                <span class="ui-radio__circle">
                    <span class="ui-radio__dot"></span>
                </span>
                <span class="ui-radio__label-text">Вариант 2</span>
            </label>
            <pre class="ui-demo__code">
&lt;label class="ui-radio"&gt;
    &lt;input type="radio" name="demo-radio" class="ui-radio__input" checked&gt;
    &lt;span class="ui-radio__circle"&gt;
        &lt;span class="ui-radio__dot"&gt;&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="ui-radio__label-text"&gt;Вариант 1&lt;/span&gt;
&lt;/label&gt;
            </pre>
        </div>

        <!-- Кастомный select -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">Выпадающий список (Custom Select)</h3>
            <div class="ui-select">
                <select class="ui-select__field">
                    <option value="" disabled selected>Выберите вариант</option>
                    <option value="1">Вариант 1</option>
                    <option value="2">Вариант 2</option>
                </select>
                <div class="ui-select__current">Выберите вариант</div>
                <div class="ui-select__icon"></div>
                <div class="ui-select__dropdown">
                    <div class="ui-select__option" data-value="1">Вариант 1</div>
                    <div class="ui-select__option" data-value="2">Вариант 2</div>
                </div>
            </div>
            <pre class="ui-demo__code">
&lt;div class="ui-select"&gt;
    &lt;select class="ui-select__field"&gt;
        &lt;option value="" disabled selected&gt;Выберите вариант&lt;/option&gt;
        &lt;option value="1"&gt;Вариант 1&lt;/option&gt;
        &lt;option value="2"&gt;Вариант 2&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class="ui-select__current"&gt;Выберите вариант&lt;/div&gt;
    &lt;div class="ui-select__icon"&gt;&lt;/div&gt;
    &lt;div class="ui-select__dropdown"&gt;
        &lt;div class="ui-select__option" data-value="1"&gt;Вариант 1&lt;/div&gt;
        &lt;div class="ui-select__option" data-value="2"&gt;Вариант 2&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- Поле ввода Email -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">Поле ввода (Email)</h3>
            <div class="ui-input">
                <input type="email" class="ui-input__field" required>
                <label class="ui-input__label">E-mail</label>
                <div class="ui-input__error"></div>
            </div>
            <pre class="ui-demo__code">
&lt;div class="ui-input"&gt;
    &lt;input type="email" class="ui-input__field" required&gt;
    &lt;label class="ui-input__label"&gt;E-mail&lt;/label&gt;
    &lt;div class="ui-input__error"&gt;&lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- Аккордеон -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">Аккордеон</h3>
            <div class="accordion">
                <div class="accordion__item">
                    <button class="accordion__header">Заголовок 1</button>
                    <div class="accordion__content">Контент аккордеона 1</div>
                    <div class="accordion__bar"></div>
                </div>
                <div class="accordion__item">
                    <button class="accordion__header">Заголовок 2</button>
                    <div class="accordion__content">Контент аккордеона 2</div>
                    <div class="accordion__bar"></div>
                </div>
            </div>
            <pre class="ui-demo__code">
&lt;div class="accordion"&gt;
    &lt;div class="accordion__item"&gt;
        &lt;button class="accordion__header"&gt;Заголовок 1&lt;/button&gt;
        &lt;div class="accordion__content"&gt;Контент аккордеона 1&lt;/div&gt;
        &lt;div class="accordion__bar"&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- Переключатель типографики -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">Переключатель типографики</h3>
            <div class="typography-switch">
                <button data-typography="default" class="typography-switch__button">Обычный</button>
                <button data-typography="large" class="typography-switch__button">Крупный</button>
                <button data-typography="contrast" class="typography-switch__button">Контрастный</button>
            </div>
            <pre class="ui-demo__code">
&lt;div class="typography-switch"&gt;
    &lt;button data-typography="default"&gt;Обычный&lt;/button&gt;
    &lt;button data-typography="large"&gt;Крупный&lt;/button&gt;
    &lt;button data-typography="contrast"&gt;Контрастный&lt;/button&gt;
&lt;/div&gt;
            </pre>
        </div>
    </div>
</section>

<!-- 
    Краткая навигация по секции:
    - .section--ui — основной контейнер раздела UI Kit
    - .ui-demo — блок для каждого компонента (заголовок, пример, код)
    - .ui-demo__title — название компонента
    - .ui-demo__code — пример HTML-кода (можно сделать copy-to-clipboard)
    Для стилизации используйте main.scss/_ui.scss
    Для интерактивности — соответствующие JS-модули
-->
