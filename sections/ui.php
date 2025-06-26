<?php
// sections/ui.php
// ������ "UI Kit": ������������ ���� UI-����������� ������� � ��������� ������������� � ����������

/*
    � ���� ����� �����������:
    - ������� ���� ��������� UI-����������� (������, ��������, �����������, select, input, ��������� � ��.)
    - ��� ������� ����������: ���������, ������� ��������, ������ �������������, ��������� HTML
    - ����� �������� ������������� playground'� ��� ������������
    ��� ���������� ����������� main.scss/_ui.scss
*/
?>

<section id="ui" class="section section--ui">
    <div class="section__container">
        <h2 class="section__title">UI Kit</h2>
        <p class="section__subtitle">���������� ���������������� ������������ �����������</p>

        <!-- ������ -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">������</h3>
            <button class="ui-button">������� ������</button>
            <button class="ui-button" disabled>Disabled</button>
            <button class="ui-button" data-loading="true">Loading</button>
            <pre class="ui-demo__code">
&lt;button class="ui-button"&gt;������� ������&lt;/button&gt;
&lt;button class="ui-button" disabled&gt;Disabled&lt;/button&gt;
&lt;button class="ui-button" data-loading="true"&gt;Loading&lt;/button&gt;
            </pre>
        </div>

        <!-- �������� -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">��������</h3>
            <label class="ui-checkbox">
                <input type="checkbox" class="ui-checkbox__input" checked>
                <span class="ui-checkbox__box">
                    <span class="ui-checkbox__check"></span>
                </span>
                <span class="ui-checkbox__label-text">������� (checked)</span>
            </label>
            <label class="ui-checkbox">
                <input type="checkbox" class="ui-checkbox__input">
                <span class="ui-checkbox__box">
                    <span class="ui-checkbox__check"></span>
                </span>
                <span class="ui-checkbox__label-text">�������</span>
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
    &lt;span class="ui-checkbox__label-text"&gt;�������&lt;/span&gt;
&lt;/label&gt;
            </pre>
        </div>

        <!-- ����������� -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">�����������</h3>
            <label class="ui-radio">
                <input type="radio" name="demo-radio" class="ui-radio__input" checked>
                <span class="ui-radio__circle">
                    <span class="ui-radio__dot"></span>
                </span>
                <span class="ui-radio__label-text">������� 1</span>
            </label>
            <label class="ui-radio">
                <input type="radio" name="demo-radio" class="ui-radio__input">
                <span class="ui-radio__circle">
                    <span class="ui-radio__dot"></span>
                </span>
                <span class="ui-radio__label-text">������� 2</span>
            </label>
            <pre class="ui-demo__code">
&lt;label class="ui-radio"&gt;
    &lt;input type="radio" name="demo-radio" class="ui-radio__input" checked&gt;
    &lt;span class="ui-radio__circle"&gt;
        &lt;span class="ui-radio__dot"&gt;&lt;/span&gt;
    &lt;/span&gt;
    &lt;span class="ui-radio__label-text"&gt;������� 1&lt;/span&gt;
&lt;/label&gt;
            </pre>
        </div>

        <!-- ��������� select -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">���������� ������ (Custom Select)</h3>
            <div class="ui-select">
                <select class="ui-select__field">
                    <option value="" disabled selected>�������� �������</option>
                    <option value="1">������� 1</option>
                    <option value="2">������� 2</option>
                </select>
                <div class="ui-select__current">�������� �������</div>
                <div class="ui-select__icon"></div>
                <div class="ui-select__dropdown">
                    <div class="ui-select__option" data-value="1">������� 1</div>
                    <div class="ui-select__option" data-value="2">������� 2</div>
                </div>
            </div>
            <pre class="ui-demo__code">
&lt;div class="ui-select"&gt;
    &lt;select class="ui-select__field"&gt;
        &lt;option value="" disabled selected&gt;�������� �������&lt;/option&gt;
        &lt;option value="1"&gt;������� 1&lt;/option&gt;
        &lt;option value="2"&gt;������� 2&lt;/option&gt;
    &lt;/select&gt;
    &lt;div class="ui-select__current"&gt;�������� �������&lt;/div&gt;
    &lt;div class="ui-select__icon"&gt;&lt;/div&gt;
    &lt;div class="ui-select__dropdown"&gt;
        &lt;div class="ui-select__option" data-value="1"&gt;������� 1&lt;/div&gt;
        &lt;div class="ui-select__option" data-value="2"&gt;������� 2&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- ���� ����� Email -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">���� ����� (Email)</h3>
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

        <!-- ��������� -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">���������</h3>
            <div class="accordion">
                <div class="accordion__item">
                    <button class="accordion__header">��������� 1</button>
                    <div class="accordion__content">������� ���������� 1</div>
                    <div class="accordion__bar"></div>
                </div>
                <div class="accordion__item">
                    <button class="accordion__header">��������� 2</button>
                    <div class="accordion__content">������� ���������� 2</div>
                    <div class="accordion__bar"></div>
                </div>
            </div>
            <pre class="ui-demo__code">
&lt;div class="accordion"&gt;
    &lt;div class="accordion__item"&gt;
        &lt;button class="accordion__header"&gt;��������� 1&lt;/button&gt;
        &lt;div class="accordion__content"&gt;������� ���������� 1&lt;/div&gt;
        &lt;div class="accordion__bar"&gt;&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- ������������� ����������� -->
        <div class="ui-demo">
            <h3 class="ui-demo__title">������������� �����������</h3>
            <div class="typography-switch">
                <button data-typography="default" class="typography-switch__button">�������</button>
                <button data-typography="large" class="typography-switch__button">�������</button>
                <button data-typography="contrast" class="typography-switch__button">�����������</button>
            </div>
            <pre class="ui-demo__code">
&lt;div class="typography-switch"&gt;
    &lt;button data-typography="default"&gt;�������&lt;/button&gt;
    &lt;button data-typography="large"&gt;�������&lt;/button&gt;
    &lt;button data-typography="contrast"&gt;�����������&lt;/button&gt;
&lt;/div&gt;
            </pre>
        </div>
    </div>
</section>

<!-- 
    ������� ��������� �� ������:
    - .section--ui � �������� ��������� ������� UI Kit
    - .ui-demo � ���� ��� ������� ���������� (���������, ������, ���)
    - .ui-demo__title � �������� ����������
    - .ui-demo__code � ������ HTML-���� (����� ������� copy-to-clipboard)
    ��� ���������� ����������� main.scss/_ui.scss
    ��� ��������������� � ��������������� JS-������
-->
