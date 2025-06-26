// scripts/main.js
// Главный файл инициализации всех UI-компонентов и скриптов проекта

/*
    Функционал:
    - Импорт и инициализация всех модулей/классов UI (Accordion, BurgerMenu, Button, Checkbox, CustomSelect, EmailInput, Radio, SmoothScroll, TypographySwitch)
    - Можно подключать сторонние библиотеки или свои утилиты
    - Все инициализации выполняются после загрузки DOM
    - Если используете ES-модули — используйте import, если обычные скрипты — просто вызывайте инициализацию
*/

// Если используете ES-модули (import), раскомментируйте строки ниже и подключайте соответствующие файлы:
// import Accordion from './Accordion.js';
// import BurgerMenu from './BurgerMenu.js';
// import UIButton from './Button.js';
// import UICheckbox from './Checkbox.js';
// import CustomSelect from './CustomSelect.js';
// import EmailInput from './EmailInput.js';
// import UIRadio from './Radio.js';
// import SmoothScroll from './SmoothScroll.js';
// import TypographySwitch from './TypographySwitch.js';

// Если все классы подключены через <script> в HTML, просто вызывайте их инициализацию:

document.addEventListener('DOMContentLoaded', () => {
    // Инициализация UI-компонентов
    if (typeof Accordion !== 'undefined') Accordion.initAll();
    if (typeof BurgerMenu !== 'undefined') BurgerMenu.initAll && BurgerMenu.initAll();
    if (typeof UIButton !== 'undefined') UIButton.initAll();
    if (typeof UICheckbox !== 'undefined') UICheckbox.initAll();
    if (typeof CustomSelect !== 'undefined') CustomSelect.initAll();
    if (typeof EmailInput !== 'undefined') EmailInput.initAll();
    if (typeof UIRadio !== 'undefined') UIRadio.initAll();
    if (typeof SmoothScroll !== 'undefined') SmoothScroll.initAll({ offset: 0 }); // offset — если есть фиксированный header
    if (typeof TypographySwitch !== 'undefined') TypographySwitch.initAll();

    // Здесь можно добавить дополнительные инициализации или кастомные скрипты
    // Например, инициализация тултипов, модалок и т.д.
});

/*
    Краткая навигация по коду:
    - Весь основной JS-код проекта инициализируется здесь
    - Для каждого компонента вызывается статический метод initAll()
    - Можно добавлять свои кастомные скрипты или сторонние библиотеки
    - Для поддержки ES-модулей используйте import и export в каждом классе
    Для стилизации используйте main.scss и соответствующие partials
*/
