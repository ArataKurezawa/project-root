<?php
// sections/grid.php
// Раздел "Сетка": демонстрация адаптивной сетки и принципов верстки проекта

/*
    В этом файле размещаются:
    - Примеры работы адаптивной сетки (контейнер, ряды, колонки)
    - Описание принципов построения сетки (flex/grid, брейкпоинты)
    - Демонстрация адаптивности (разные размеры экранов)
    Для стилизации используйте main.scss/_grid.scss
*/
?>

<section id="grid" class="section section--grid">
    <div class="section__container">
        <h2 class="section__title">Сетка</h2>
        <p class="section__subtitle">
            Адаптивная flex/grid-сетка для построения интерфейса. Используйте контейнеры, ряды и колонки для организации контента.
        </p>

        <!-- Пример контейнера и ряда -->
        <div class="grid-demo">
            <h3 class="grid-demo__title">Контейнер и ряд</h3>
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-col grid-col--4">.grid-col--4</div>
                    <div class="grid-col grid-col--4">.grid-col--4</div>
                    <div class="grid-col grid-col--4">.grid-col--4</div>
                </div>
            </div>
            <pre class="grid-demo__code">
&lt;div class="grid-container"&gt;
    &lt;div class="grid-row"&gt;
        &lt;div class="grid-col grid-col--4"&gt;.grid-col--4&lt;/div&gt;
        &lt;div class="grid-col grid-col--4"&gt;.grid-col--4&lt;/div&gt;
        &lt;div class="grid-col grid-col--4"&gt;.grid-col--4&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- Пример адаптивных колонок -->
        <div class="grid-demo">
            <h3 class="grid-demo__title">Адаптивные колонки</h3>
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-col grid-col--6 grid-col--md-12">.grid-col--6 .grid-col--md-12</div>
                    <div class="grid-col grid-col--6 grid-col--md-12">.grid-col--6 .grid-col--md-12</div>
                </div>
            </div>
            <pre class="grid-demo__code">
&lt;div class="grid-container"&gt;
    &lt;div class="grid-row"&gt;
        &lt;div class="grid-col grid-col--6 grid-col--md-12"&gt;.grid-col--6 .grid-col--md-12&lt;/div&gt;
        &lt;div class="grid-col grid-col--6 grid-col--md-12"&gt;.grid-col--6 .grid-col--md-12&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- Пример вложенных рядов -->
        <div class="grid-demo">
            <h3 class="grid-demo__title">Вложенные ряды</h3>
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-col grid-col--8">
                        <div class="grid-row">
                            <div class="grid-col grid-col--6">Вложенная .grid-col--6</div>
                            <div class="grid-col grid-col--6">Вложенная .grid-col--6</div>
                        </div>
                    </div>
                    <div class="grid-col grid-col--4">.grid-col--4</div>
                </div>
            </div>
            <pre class="grid-demo__code">
&lt;div class="grid-container"&gt;
    &lt;div class="grid-row"&gt;
        &lt;div class="grid-col grid-col--8"&gt;
            &lt;div class="grid-row"&gt;
                &lt;div class="grid-col grid-col--6"&gt;Вложенная .grid-col--6&lt;/div&gt;
                &lt;div class="grid-col grid-col--6"&gt;Вложенная .grid-col--6&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="grid-col grid-col--4"&gt;.grid-col--4&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- Описание брейкпоинтов -->
        <div class="grid-demo">
            <h3 class="grid-demo__title">Брейкпоинты и адаптивность</h3>
            <ul>
                <li><b>.grid-col--12</b> — 100% ширины (1 колонка)</li>
                <li><b>.grid-col--6</b> — 50% ширины (2 колонки)</li>
                <li><b>.grid-col--4</b> — 33% ширины (3 колонки)</li>
                <li><b>.grid-col--md-12</b> — 100% ширины на средних экранах (мобильная адаптация)</li>
                <li>Используйте модификаторы <b>--md-*</b>, <b>--sm-*</b> для других брейкпоинтов</li>
            </ul>
            <pre class="grid-demo__code">
.grid-col--4        // 3 колонки на десктопе
.grid-col--md-12    // 1 колонка на планшете/мобиле
            </pre>
        </div>
    </div>
</section>

<!-- 
    Краткая навигация по секции:
    - .section--grid — основной контейнер раздела сетки
    - .grid-demo — блок для каждого примера (заголовок, пример, код)
    - .grid-demo__title — название примера
    - .grid-demo__code — пример HTML-кода
    Для стилизации используйте main.scss/_grid.scss
-->
