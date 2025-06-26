// scripts/EmailInput.js
// Скрипт для управления состояниями и валидацией поля ввода e-mail

/*
    Функционал:
    - Анимация плавающего плейсхолдера при фокусе или заполнении
    - Валидация e-mail в реальном времени (по потере фокуса и/или вводу)
    - Отображение состояния ошибки (добавление класса и показ сообщения)
    - Поддержка disabled состояния (через атрибут)
    - Можно использовать для нескольких полей на странице

    Структура HTML должна соответствовать компоненту input.php:
    .ui-input
        input.ui-input__field[type="email"]
        label.ui-input__label
        .ui-input__error (по необходимости)
*/

class EmailInput {
    constructor(root) {
        this.root = root;
        this.input = root.querySelector('.ui-input__field');
        this.label = root.querySelector('.ui-input__label');
        this.error = root.querySelector('.ui-input__error');

        if (!this.input) return;

        // Анимация плейсхолдера: фокус/блюр/заполнение
        this.input.addEventListener('focus', () => this.setFocused(true));
        this.input.addEventListener('blur', () => {
            this.setFocused(false);
            this.validate();
        });
        this.input.addEventListener('input', () => {
            this.updateFilled();
            if (this.root.classList.contains('ui-input--error')) {
                this.validate(); // live-валидация при ошибке
            }
        });

        // Инициализация состояния
        this.updateFilled();
    }

    setFocused(isFocused) {
        if (isFocused) {
            this.root.classList.add('ui-input--focused');
        } else {
            this.root.classList.remove('ui-input--focused');
        }
    }

    updateFilled() {
        // Для анимации плейсхолдера: если поле не пустое — label "плавает"
        if (this.input.value) {
            this.root.classList.add('ui-input--filled');
        } else {
            this.root.classList.remove('ui-input--filled');
        }
    }

    validate() {
        // Проверка валидности e-mail
        const value = this.input.value.trim();
        let isValid = true;

        if (!value) {
            isValid = false;
            this.setError('Поле не должно быть пустым');
        } else if (!this.isEmail(value)) {
            isValid = false;
            this.setError('Введите корректный e-mail');
        } else {
            this.clearError();
        }

        return isValid;
    }

    isEmail(value) {
        // Простая регулярка для проверки e-mail
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
    }

    setError(message) {
        this.root.classList.add('ui-input--error');
        if (this.error) {
            this.error.textContent = message;
            this.error.style.display = 'block';
        } else {
            // Если блока ошибки нет — создаём его
            const errorDiv = document.createElement('div');
            errorDiv.className = 'ui-input__error';
            errorDiv.textContent = message;
            this.root.appendChild(errorDiv);
            this.error = errorDiv;
        }
    }

    clearError() {
        this.root.classList.remove('ui-input--error');
        if (this.error) {
            this.error.textContent = '';
            this.error.style.display = 'none';
        }
    }

    // Статический метод для инициализации всех email-полей на странице
    static initAll() {
        document.querySelectorAll('.ui-input').forEach(root => {
            const input = root.querySelector('.ui-input__field');
            if (input && input.type === 'email') new EmailInput(root);
        });
    }
}

// Автоматическая инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    EmailInput.initAll();
});

/*
    Краткая навигация по коду:
    - class EmailInput — основной класс для email-поля
    - constructor — навешивает обработчики на focus, blur, input
    - setFocused — добавляет/убирает класс фокуса
    - updateFilled — управляет анимацией плавающего плейсхолдера
    - validate — проверяет корректность e-mail, показывает/убирает ошибку
    - setError/clearError — управление ошибкой
    - static initAll — инициализация всех email-полей на странице
    Для стилизации используйте main.scss/_ui.scss
*/
