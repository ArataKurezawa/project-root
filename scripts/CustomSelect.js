// scripts/CustomSelect.js
// Скрипт для управления кастомным выпадающим списком (select)

/*
    Функционал:
    - Открытие/закрытие выпадающего меню по клику на текущий элемент
    - Выбор значения из списка и синхронизация с нативным <select>
    - Закрытие меню по клику вне select или при выборе опции
    - Поддержка disabled и error состояний через классы
    - Можно использовать несколько кастомных селектов на странице

    Структура HTML должна соответствовать компоненту select.php:
    .ui-select
        select.ui-select__field
        .ui-select__current
        .ui-select__icon
        .ui-select__dropdown
            .ui-select__option (data-value)
*/

class CustomSelect {
    constructor(root) {
        this.root = root;
        this.select = root.querySelector('.ui-select__field');
        this.current = root.querySelector('.ui-select__current');
        this.dropdown = root.querySelector('.ui-select__dropdown');
        this.options = Array.from(root.querySelectorAll('.ui-select__option'));
        this.icon = root.querySelector('.ui-select__icon');
        this.isOpen = false;

        // Если селект disabled — не вешаем обработчики
        if (this.select.disabled) {
            this.root.classList.add('ui-select--disabled');
            return;
        }

        // Открытие/закрытие меню по клику на .ui-select__current или .ui-select__icon
        [this.current, this.icon].forEach(el => {
            if (el) el.addEventListener('click', (e) => {
                e.stopPropagation();
                this.toggle();
            });
        });

        // Выбор опции
        this.options.forEach(option => {
            option.addEventListener('click', (e) => {
                e.stopPropagation();
                this.selectOption(option);
                this.close();
            });
        });

        // Закрытие меню по клику вне селекта
        document.addEventListener('click', (e) => {
            if (this.isOpen && !this.root.contains(e.target)) {
                this.close();
            }
        });

        // Синхронизация при изменении нативного select (например, через JS)
        this.select.addEventListener('change', () => {
            this.updateCurrent();
        });

        // Инициализация текущего значения
        this.updateCurrent();
    }

    toggle() {
        if (this.isOpen) {
            this.close();
        } else {
            this.open();
        }
    }

    open() {
        this.root.classList.add('ui-select--open');
        this.isOpen = true;
    }

    close() {
        this.root.classList.remove('ui-select--open');
        this.isOpen = false;
    }

    selectOption(option) {
        const value = option.getAttribute('data-value');
        // Устанавливаем значение в нативный select
        this.select.value = value;
        // Вызываем событие change для select
        this.select.dispatchEvent(new Event('change', { bubbles: true }));
        // Обновляем отображение
        this.updateCurrent();
    }

    updateCurrent() {
        // Находим выбранную опцию
        const selectedOption = this.options.find(opt => opt.getAttribute('data-value') === this.select.value);
        if (selectedOption) {
            this.current.textContent = selectedOption.textContent;
        } else {
            // Если ничего не выбрано — placeholder
            const placeholder = this.select.querySelector('option[disabled][selected]');
            this.current.textContent = placeholder ? placeholder.textContent : 'Выберите...';
        }
        // Подсвечиваем выбранную опцию в dropdown
        this.options.forEach(opt => {
            if (opt.getAttribute('data-value') === this.select.value) {
                opt.classList.add('ui-select__option--selected');
            } else {
                opt.classList.remove('ui-select__option--selected');
            }
        });
    }

    // Статический метод для инициализации всех кастомных select на странице
    static initAll() {
        document.querySelectorAll('.ui-select').forEach(root => new CustomSelect(root));
    }
}

// Автоматическая инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    CustomSelect.initAll();
});

/*
    Краткая навигация по коду:
    - class CustomSelect — основной класс для кастомного select
    - constructor — инициализация, обработчики событий
    - toggle/open/close — управление выпадающим меню
    - selectOption — выбор опции и синхронизация с нативным select
    - updateCurrent — обновление отображения выбранного значения
    - static initAll — инициализация всех .ui-select на странице
    Для стилизации используйте main.scss/_ui.scss
*/
