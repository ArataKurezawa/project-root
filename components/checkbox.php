<?php
// components/checkbox.php
//  омпонент "„екбокс" дл€ UI-блока

/*
    ¬арианты чекбокса:
    - јктивный (отмечен)
    - Ќеактивный (не отмечен)
    - Disabled (заблокирован)
    - — ошибкой (если требуетс€ по макету)
*/

/*
    ƒл€ стилизации чекбокса используютс€ классы:
    - .ui-checkbox Ч корневой контейнер чекбокса
    - .ui-checkbox__input Ч скрытый input[type=checkbox]
    - .ui-checkbox__box Ч визуальна€ часть чекбокса (рисуетс€ через CSS)
    - .ui-checkbox__check Ч иконка галочки (через SVG или CSS)
    - .ui-checkbox__label Ч подпись к чекбоксу
    - .ui-checkbox--error Ч модификатор дл€ состо€ни€ ошибки
    - .ui-checkbox--disabled Ч модификатор дл€ заблокированного чекбокса
*/
?>

<!-- јктивный чекбокс (отмечен) -->
<label class="ui-checkbox">
    <input class="ui-checkbox__input" type="checkbox" checked>
    <span class="ui-checkbox__box">
        <!-- √алочка (можно SVG или CSS) -->
        <span class="ui-checkbox__check"></span>
    </span>
    <span class="ui-checkbox__label">я согласен с услови€ми</span>
</label>

<!-- Ќеактивный чекбокс (не отмечен) -->
<label class="ui-checkbox">
    <input class="ui-checkbox__input" type="checkbox">
    <span class="ui-checkbox__box">
        <span class="ui-checkbox__check"></span>
    </span>
    <span class="ui-checkbox__label">ѕолучать рассылку</span>
</label>

<!-- Disabled чекбокс (заблокирован) -->
<label class="ui-checkbox ui-checkbox--disabled">
    <input class="ui-checkbox__input" type="checkbox" disabled>
    <span class="ui-checkbox__box">
        <span class="ui-checkbox__check"></span>
    </span>
    <span class="ui-checkbox__label">Ќедоступно</span>
</label>

<!-- „екбокс с ошибкой -->
<label class="ui-checkbox ui-checkbox--error">
    <input class="ui-checkbox__input" type="checkbox">
    <span class="ui-checkbox__box">
        <span class="ui-checkbox__check"></span>
    </span>
    <span class="ui-checkbox__label">ќшибка выбора</span>
</label>

<!-- 
     омментарии по структуре:
    - .ui-checkbox Ч корневой label дл€ чекбокса (делает кликабельной всю область)
    - .ui-checkbox__input Ч скрытый input[type=checkbox], управл€ет состо€нием
    - .ui-checkbox__box Ч визуальна€ часть чекбокса (рамка, фон, анимаци€)
    - .ui-checkbox__check Ч галочка, по€вл€етс€ при checked (через CSS или SVG)
    - .ui-checkbox__label Ч подпись справа от чекбокса
    - .ui-checkbox--disabled Ч модификатор дл€ отключенного состо€ни€
    - .ui-checkbox--error Ч модификатор дл€ состо€ни€ ошибки (например, красна€ рамка)
    ƒл€ стилизации использовать _ui.scss, дл€ логики Ч Checkbox.js (если нужна кастомна€ обработка)
-->
