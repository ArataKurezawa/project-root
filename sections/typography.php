<?php
// sections/typography.php
// Раздел "Типографика": демонстрация всех типографических стилей проекта

/*
    В этом файле размещаются:
    - Примеры всех базовых и кастомных текстовых стилей: заголовки, параграфы, списки, ссылки, цитаты, код, таблицы и т.д.
    - Для каждого типа: заголовок, краткое описание, пример использования, структура HTML
    - Можно добавить интерактивный переключатель типографики (обычный, крупный, контрастный)
    Для стилизации используйте main.scss/_typography.scss
*/
?>

<section id="typography" class="section section--typography">
    <div class="section__container">
        <h2 class="section__title">Типографика</h2>
        <p class="section__subtitle">Основные текстовые стили и элементы оформления</p>

        <!-- Переключатель типографики (если нужен, для демонстрации) -->
        <div class="typography-switch">
            <button data-typography="default" class="typography-switch__button">Обычный</button>
            <button data-typography="large" class="typography-switch__button">Крупный</button>
            <button data-typography="contrast" class="typography-switch__button">Контрастный</button>
        </div>

        <!-- Заголовки -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">Заголовки</h3>
            <h1>Заголовок H1</h1>
            <h2>Заголовок H2</h2>
            <h3>Заголовок H3</h3>
            <h4>Заголовок H4</h4>
            <h5>Заголовок H5</h5>
            <h6>Заголовок H6</h6>
            <pre class="typography-demo__code">
&lt;h1&gt;Заголовок H1&lt;/h1&gt;
&lt;h2&gt;Заголовок H2&lt;/h2&gt;
&lt;h3&gt;Заголовок H3&lt;/h3&gt;
&lt;h4&gt;Заголовок H4&lt;/h4&gt;
&lt;h5&gt;Заголовок H5&lt;/h5&gt;
&lt;h6&gt;Заголовок H6&lt;/h6&gt;
            </pre>
        </div>

        <!-- Обычный текст и параграфы -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">Параграфы</h3>
            <p>Это обычный абзац текста. Используется для основного контента страницы. Размер и межстрочный интервал задаются в соответствии с дизайн-гайдом.</p>
            <p><b>Жирный текст</b>, <i>курсив</i>, <u>подчёркнутый</u>, <mark>выделенный</mark>, <span style="color: #1976d2;">цветной</span>.</p>
            <pre class="typography-demo__code">
&lt;p&gt;Это обычный абзац текста.&lt;/p&gt;
&lt;b&gt;Жирный текст&lt;/b&gt;, &lt;i&gt;курсив&lt;/i&gt;, &lt;u&gt;подчёркнутый&lt;/u&gt;, &lt;mark&gt;выделенный&lt;/mark&gt;
            </pre>
        </div>

        <!-- Списки -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">Списки</h3>
            <ul>
                <li>Элемент маркированного списка</li>
                <li>Ещё один элемент</li>
            </ul>
            <ol>
                <li>Первый элемент</li>
                <li>Второй элемент</li>
            </ol>
            <pre class="typography-demo__code">
&lt;ul&gt;
    &lt;li&gt;Элемент маркированного списка&lt;/li&gt;
&lt;/ul&gt;
&lt;ol&gt;
    &lt;li&gt;Первый элемент&lt;/li&gt;
&lt;/ol&gt;
            </pre>
        </div>

        <!-- Ссылки -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">Ссылки</h3>
            <a href="#">Обычная ссылка</a>
            <a href="#" class="link--primary">Основная ссылка</a>
            <a href="#" class="link--secondary">Второстепенная ссылка</a>
            <pre class="typography-demo__code">
&lt;a href="#"&gt;Обычная ссылка&lt;/a&gt;
&lt;a href="#" class="link--primary"&gt;Основная ссылка&lt;/a&gt;
            </pre>
        </div>

        <!-- Цитаты -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">Цитаты</h3>
            <blockquote>
                Это пример цитаты. Оформление зависит от дизайн-гайда.
            </blockquote>
            <pre class="typography-demo__code">
&lt;blockquote&gt;
    Это пример цитаты.
&lt;/blockquote&gt;
            </pre>
        </div>

        <!-- Код -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">Код</h3>
            <code>const x = 42;</code>
            <pre>
function hello() {
    console.log("Hello, world!");
}
            </pre>
            <pre class="typography-demo__code">
&lt;code&gt;const x = 42;&lt;/code&gt;
&lt;pre&gt;
function hello() {
    console.log("Hello, world!");
}
&lt;/pre&gt;
            </pre>
        </div>

        <!-- Таблицы -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">Таблица</h3>
            <table>
                <thead>
                    <tr>
                        <th>Заголовок</th>
                        <th>Значение</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ячейка 1</td>
                        <td>Ячейка 2</td>
                    </tr>
                    <tr>
                        <td>Ячейка 3</td>
                        <td>Ячейка 4</td>
                    </tr>
                </tbody>
            </table>
            <pre class="typography-demo__code">
&lt;table&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;Заголовок&lt;/th&gt;
            &lt;th&gt;Значение&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;Ячейка 1&lt;/td&gt;
            &lt;td&gt;Ячейка 2&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
            </pre>
        </div>
    </div>
</section>

<!-- 
    Краткая навигация по секции:
    - .section--typography — основной контейнер раздела типографики
    - .typography-demo — блок для каждого типа текста (заголовок, пример, код)
    - .typography-demo__title — название блока
    - .typography-demo__code — пример HTML-кода
    Для стилизации используйте main.scss/_typography.scss
    Для интерактивности — TypographySwitch.js
-->
