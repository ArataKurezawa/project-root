// scripts/Button.js
// Скрипт для управления состояниями и анимациями кнопок UI

/*
    Функционал:
    - Визуальные эффекты на hover и active (градиент, анимация)
    - Состояние disabled (блокировка кнопки)
    - Состояние loading (по желанию, с индикатором)
    - Поддержка нескольких кнопок на странице
    - Можно расширить для кастомных событий (например, отправка формы)
    Все состояния реализуются через классы, JS только для имитации или сложных эффектов
*/

class UIButton {
    constructor(button) {
        this.button = button;

        // Если кнопка disabled, не вешаем обработчики
        if (this.button.disabled) return;

        // Hover эффект
        this.button.addEventListener('mouseenter', () => this.handleHover(true));
        this.button.addEventListener('mouseleave', () => this.handleHover(false));

        // Active эффект
        this.button.addEventListener('mousedown', () => this.handleActive(true));
        this.button.addEventListener('mouseup', () => this.handleActive(false));
        this.button.addEventListener('mouseleave', () => this.handleActive(false));

        // (Необязательно) — состояние loading
        // Можно добавить data-loading="true" для демонстрации
        if (this.button.dataset.loading === "true") {
            this.setLoading(true);
        }
    }

    handleHover(isHover) {
        if (isHover) {
            this.button.classList.add('ui-button--hover');
        } else {
            this.button.classList.remove('ui-button--hover');
        }
    }

    handleActive(isActive) {
        if (isActive) {
            this.button.classList.add('ui-button--active');
        } else {
            this.button.classList.remove('ui-button--active');
        }
    }

    // Метод для установки состояния loading
    setLoading(isLoading) {
        if (isLoading) {
            this.button.classList.add('ui-button--loading');
            this.button.disabled = true;
            // Можно добавить спиннер внутрь кнопки
            if (!this.button.querySelector('.ui-button__spinner')) {
                const spinner = document.createElement('span');
                spinner.className = 'ui-button__spinner';
                this.button.appendChild(spinner);
            }
        } else {
            this.button.classList.remove('ui-button--loading');
            this.button.disabled = false;
            const spinner = this.button.querySelector('.ui-button__spinner');
            if (spinner) spinner.remove();
        }
    }

    // Статический метод для инициализации всех кнопок на странице
    static initAll() {
        document.querySelectorAll('.ui-button').forEach(btn => new UIButton(btn));
    }
}

// Автоматическая инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    UIButton.initAll();
});

/*
    Краткая навигация по коду:
    - class UIButton — основной класс для управления кнопкой
    - constructor — навешивает обработчики на hover, active, loading
    - handleHover/handleActive — добавляют/убирают классы для эффектов
    - setLoading — включает/выключает состояние загрузки (с блокировкой и спиннером)
    - static initAll — инициализация всех .ui-button на странице
    Для стилизации используйте main.scss/_ui.scss
*/
