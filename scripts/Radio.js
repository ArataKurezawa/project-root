// scripts/Radio.js
// Скрипт для управления кастомными радиокнопками UI

/*
    Функционал:
    - Переключение состояния checked по клику на label
    - Поддержка disabled и error состояний (через классы)
    - Синхронизация состояния .ui-radio__circle и .ui-radio__dot с input
    - Поддержка нескольких групп радиокнопок на странице
    - Можно расширить для кастомных событий (например, валидация формы)
    Все основные визуальные состояния реализуются через CSS, JS нужен для сложных кейсов и анимаций
*/

class UIRadio {
    constructor(label) {
        this.label = label;
        this.input = label.querySelector('.ui-radio__input');
        this.circle = label.querySelector('.ui-radio__circle');
        this.dot = label.querySelector('.ui-radio__dot');

        // Если радиокнопка disabled — не вешаем обработчики
        if (this.input.disabled) return;

        // Клик по label — переключаем checked
        this.label.addEventListener('click', (e) => {
            // Не переключаем, если клик был по ссылке внутри label
            if (e.target.tagName.toLowerCase() === 'a') return;

            // Только если не disabled
            if (!this.input.disabled) {
                // Не даём стандартному поведению input дважды менять состояние
                e.preventDefault();
                this.input.checked = true;
                this.updateGroup();
            }
        });

        // Синхронизация состояния при изменении input (например, через JS)
        this.input.addEventListener('change', () => this.updateGroup());

        // Инициализация состояния
        this.updateGroup();
    }

    updateGroup() {
        // Получаем все radio с таким же name
        const name = this.input.name;
        const radios = document.querySelectorAll(`input[type="radio"][name="${name}"]`);
        radios.forEach(input => {
            const label = input.closest('.ui-radio');
            if (!label) return;
            if (input.checked) {
                label.classList.add('ui-radio--checked');
            } else {
                label.classList.remove('ui-radio--checked');
            }
            // Disabled
            if (input.disabled) {
                label.classList.add('ui-radio--disabled');
            } else {
                label.classList.remove('ui-radio--disabled');
            }
            // Error (если есть .ui-radio--error)
            // Визуально error управляется только классом на label
        });
    }

    // Статический метод для инициализации всех радиокнопок на странице
    static initAll() {
        document.querySelectorAll('.ui-radio').forEach(label => new UIRadio(label));
    }
}

// Автоматическая инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    UIRadio.initAll();
});

/*
    Краткая навигация по коду:
    - class UIRadio — основной класс для управления радиокнопкой
    - constructor — навешивает обработчики на label и input
    - updateGroup — обновляет классы состояния (checked, disabled, error) для всей группы
    - static initAll — инициализация всех .ui-radio на странице
    Для стилизации используйте main.scss/_ui.scss
*/
