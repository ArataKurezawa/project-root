// scripts/TypographySwitch.js
// Скрипт для переключения вариантов типографики на странице

/*
    Функционал:
    - Позволяет пользователю переключать между разными вариантами отображения текста (например, обычный, крупный, контрастный)
    - Сохраняет выбранный вариант в localStorage (чтобы сохранялось между перезагрузками)
    - Применяет выбранный вариант ко всему сайту через добавление класса на <body> или <html>
    - Поддержка нескольких вариантов (например, "default", "large", "contrast")
    - Можно использовать кнопки, селект или toggle для управления
*/

class TypographySwitch {
    constructor(options = {}) {
        this.selector = options.selector || '.typography-switch [data-typography]';
        this.storageKey = options.storageKey || 'typographyMode';
        this.classPrefix = options.classPrefix || 'typography-';
        this.defaultMode = options.defaultMode || 'default';

        // Найти все элементы управления
        this.buttons = Array.from(document.querySelectorAll(this.selector));
        // Список всех возможных режимов (по data-typography)
        this.modes = this.buttons.map(btn => btn.dataset.typography);

        // Применить сохранённый или дефолтный режим
        this.applyMode(this.getSavedMode());

        // Навесить обработчики на кнопки
        this.buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const mode = btn.dataset.typography;
                this.applyMode(mode);
                this.saveMode(mode);
            });
        });
    }

    // Получить сохранённый режим или дефолтный
    getSavedMode() {
        return localStorage.getItem(this.storageKey) || this.defaultMode;
    }

    // Сохранить выбранный режим
    saveMode(mode) {
        localStorage.setItem(this.storageKey, mode);
    }

    // Применить режим: добавить класс на <body> и подсветить активную кнопку
    applyMode(mode) {
        // Удалить все классы типографики с <body>
        this.modes.forEach(m => document.body.classList.remove(this.classPrefix + m));
        // Добавить выбранный
        document.body.classList.add(this.classPrefix + mode);

        // Подсветить активную кнопку
        this.buttons.forEach(btn => {
            if (btn.dataset.typography === mode) {
                btn.classList.add('typography-switch__button--active');
            } else {
                btn.classList.remove('typography-switch__button--active');
            }
        });
    }

    // Статический метод для инициализации на странице
    static initAll(options = {}) {
        new TypographySwitch(options);
    }
}

// Автоматическая инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    TypographySwitch.initAll();
});

/*
    Краткая навигация по коду:
    - class TypographySwitch — основной класс для переключателя типографики
    - constructor — собирает кнопки, режимы, применяет сохранённый режим, вешает обработчики
    - getSavedMode/saveMode — работа с localStorage
    - applyMode — добавляет/убирает классы на <body>, подсвечивает активную кнопку
    - static initAll — удобная инициализация
    Для стилизации используйте main.scss/_typography.scss и классы .typography-default, .typography-large, .typography-contrast и т.д.
*/
