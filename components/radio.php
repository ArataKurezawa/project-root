<?php
// components/radio.php
//  омпонент "–адиобаттон" дл€ UI-блока

/*
    ¬арианты радиокнопок:
    - јктивна€ (выбрана)
    - Ќеактивна€ (не выбрана)
    - Disabled (заблокирована)
    - — ошибкой (если требуетс€ по макету)
*/

/*
    ƒл€ стилизации радиокнопок используютс€ классы:
    - .ui-radio Ч корневой контейнер радиокнопки
    - .ui-radio__input Ч скрытый input[type=radio]
    - .ui-radio__circle Ч визуальна€ часть радиокнопки (рисуетс€ через CSS)
    - .ui-radio__dot Ч внутренн€€ точка (по€вл€етс€ при выборе)
    - .ui-radio__label Ч подпись к радиокнопке
    - .ui-radio--error Ч модификатор дл€ состо€ни€ ошибки
    - .ui-radio--disabled Ч модификатор дл€ заблокированной радиокнопки
    ƒл€ группы радиокнопок используетс€ одинаковое им€ (name)
*/
?>

<!-- √руппа радиокнопок (пример: выбор пола) -->
<div class="ui-radio-group">
    <!-- јктивна€ радиокнопка (выбрана) -->
    <label class="ui-radio">
        <input class="ui-radio__input" type="radio" name="gender" value="male" checked>
        <span class="ui-radio__circle">
            <span class="ui-radio__dot"></span>
        </span>
        <span class="ui-radio__label">ћужской</span>
    </label>

    <!-- Ќеактивна€ радиокнопка (не выбрана) -->
    <label class="ui-radio">
        <input class="ui-radio__input" type="radio" name="gender" value="female">
        <span class="ui-radio__circle">
            <span class="ui-radio__dot"></span>
        </span>
        <span class="ui-radio__label">∆енский</span>
    </label>

    <!-- Disabled радиокнопка (заблокирована) -->
    <label class="ui-radio ui-radio--disabled">
        <input class="ui-radio__input" type="radio" name="gender" value="other" disabled>
        <span class="ui-radio__circle">
            <span class="ui-radio__dot"></span>
        </span>
        <span class="ui-radio__label">ƒругое</span>
    </label>

    <!-- –адиокнопка с ошибкой -->
    <label class="ui-radio ui-radio--error">
        <input class="ui-radio__input" type="radio" name="gender" value="none">
        <span class="ui-radio__circle">
            <span class="ui-radio__dot"></span>
        </span>
        <span class="ui-radio__label">ќшибка выбора</span>
    </label>
</div>

<!-- 
     омментарии по структуре:
    - .ui-radio-group Ч контейнер дл€ группы радиокнопок (опционально, дл€ стилизации группы)
    - .ui-radio Ч корневой label дл€ одной радиокнопки (делает кликабельной всю область)
    - .ui-radio__input Ч скрытый input[type=radio], управл€ет состо€нием
    - .ui-radio__circle Ч внешний круг радиокнопки (рамка, фон, анимаци€)
    - .ui-radio__dot Ч внутренн€€ точка, по€вл€етс€ если radio выбран (checked)
    - .ui-radio__label Ч подпись справа от радиокнопки
    - .ui-radio--disabled Ч модификатор дл€ отключенного состо€ни€ (серый цвет, курсор not-allowed)
    - .ui-radio--error Ч модификатор дл€ состо€ни€ ошибки (например, красна€ рамка)
    ƒл€ стилизации использовать _ui.scss, дл€ логики Ч Radio.js (если нужна кастомна€ обработка)
-->
