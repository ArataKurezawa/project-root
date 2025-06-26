// scripts/Checkbox.js
// Скрипт для управления кастомными чекбоксами UI

/*
    Функционал:
    - Переключение состояния checked по клику на label
    - Поддержка disabled и error состояний (через классы)
    - Синхронизация состояния .ui-checkbox__box и .ui-checkbox__check с input
    - Поддержка нескольких чекбоксов на странице
    - Можно расширить для кастомных событий (например, валидация формы)
    Все основные визуальные состояния реализуются через CSS, JS нужен для сложных кейсов и анимаций
*/

class UICheckbox {
    constructor(label) {
        this.label = label;
        this.input = label.querySelector('.ui-checkbox__input');
        this.box = label.querySelector('.ui-checkbox__box');
        this.check = label.querySelector('.ui-checkbox__check');

        // Если чекбокс disabled — не вешаем обработчики
        if (this.input.disabled) return;

        // Клик по label — переключаем checked
        this.label.addEventListener('click', (e) => {
            // Не переключаем, если клик был по ссылке внутри label
            if (e.target.tagName.toLowerCase() === 'a') return;

            // Состояние переключается только если не disabled
            if (!this.input.disabled) {
                // Не даём стандартному поведению input дважды менять состояние
                e.preventDefault();
                this.input.checked = !this.input.checked;
                this.update();
            }
        });

        // Синхронизация состояния при изменении input (например, через JS)
        this.input.addEventListener('change', () => this.update());

        // Инициализация состояния
        this.update();
    }

    update() {
        // Обновляем визуальное состояние .ui-checkbox__box и .ui-checkbox__check
        if (this.input.checked) {
            this.label.classList.add('ui-checkbox--checked');
        } else {
            this.label.classList.remove('ui-checkbox--checked');
        }
        // Disabled
        if (this.input.disabled) {
            this.label.classList.add('ui-checkbox--disabled');
        } else {
            this.label.classList.remove('ui-checkbox--disabled');
        }
        // Error (если есть .ui-checkbox--error)
        // Визуально error управляется только классом на label
    }

    // Статический метод для инициализации всех чекбоксов на странице
    static initAll() {
        document.querySelectorAll('.ui-checkbox').forEach(label => new UICheckbox(label));
    }
}

// Автоматическая инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    UICheckbox.initAll();
});

/*
    Краткая навигация по коду:
    - class UICheckbox — основной класс для управления чекбоксом
    - constructor — навешивает обработчики на label и input
    - update — обновляет классы состояния (checked, disabled, error)
    - static initAll — инициализация всех .ui-checkbox на странице
    Для стилизации используйте main.scss/_ui.scss
*/
