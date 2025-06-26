<?php
// components/input.php
//  омпонент "“екстовое поле E-mail" дл€ UI-блока

/*
    ¬арианты пол€:
    - ќбычное (пустое)
    - ¬ фокусе (с анимацией плейсхолдера)
    - — ошибкой (например, неправильный email)
    - Disabled (заблокировано)
*/

/*
    ƒл€ стилизации используютс€ классы:
    - .ui-input Ч корневой контейнер пол€
    - .ui-input__field Ч input[type=email]
    - .ui-input__label Ч плавающий плейсхолдер
    - .ui-input--error Ч модификатор дл€ состо€ни€ ошибки
    - .ui-input--disabled Ч модификатор дл€ заблокированного пол€
    - .ui-input__error Ч текст ошибки под полем
    јнимаци€ и состо€ни€ реализуютс€ через CSS и JS
*/
?>

<!-- ќбычное текстовое поле (пустое) -->
<div class="ui-input">
    <input class="ui-input__field" type="email" id="email1" name="email1" autocomplete="off" required>
    <label class="ui-input__label" for="email1">E-mail</label>
</div>

<!-- “екстовое поле в фокусе (пример дл€ теста, в реальности фокус через JS/CSS) -->
<div class="ui-input ui-input--focused">
    <input class="ui-input__field" type="email" id="email2" name="email2" autocomplete="off" required>
    <label class="ui-input__label" for="email2">E-mail</label>
</div>

<!-- “екстовое поле с ошибкой -->
<div class="ui-input ui-input--error">
    <input class="ui-input__field" type="email" id="email3" name="email3" autocomplete="off" required>
    <label class="ui-input__label" for="email3">E-mail</label>
    <div class="ui-input__error">¬ведите корректный e-mail</div>
</div>

<!-- Disabled текстовое поле -->
<div class="ui-input ui-input--disabled">
    <input class="ui-input__field" type="email" id="email4" name="email4" autocomplete="off" disabled>
    <label class="ui-input__label" for="email4">E-mail</label>
</div>

<!-- 
     омментарии по структуре:
    - .ui-input Ч обЄртка дл€ одного пол€ ввода
    - .ui-input__field Ч сам input[type=email]
    - .ui-input__label Ч плавающий плейсхолдер, который анимируетс€ при фокусе/заполнении
    - .ui-input--focused Ч модификатор дл€ состо€ни€ фокуса (дл€ демонстрации, обычно через JS/CSS)
    - .ui-input--error Ч модификатор дл€ состо€ни€ ошибки (красна€ рамка, текст ошибки)
    - .ui-input__error Ч текст ошибки под полем
    - .ui-input--disabled Ч модификатор дл€ заблокированного пол€ (серый фон, отключено)
    ƒл€ стилизации использовать _ui.scss, дл€ логики Ч EmailInput.js (анимаци€, валидаци€)
-->
