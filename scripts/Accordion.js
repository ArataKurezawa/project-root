// scripts/Accordion.js
// Класс для управления аккордеоном на странице

/*
    Функционал:
    - Открытие/закрытие секций аккордеона по клику
    - Только одна секция открыта одновременно (по умолчанию)
    - Переключение классов активности и видимости контента
    - Поддержка нескольких аккордеонов на странице

    Структура HTML для работы скрипта должна соответствовать компоненту accordion.php:
    .accordion
        .accordion__item
            .accordion__header (кнопка)
            .accordion__content (скрытый/открытый блок)
            .accordion__bar (цветная полоска)
*/

class Accordion {
    // Конструктор принимает корневой элемент аккордеона
    constructor(root) {
        // Сохраняем корневой элемент
        this.root = root;
        // Находим все элементы аккордеона внутри root
        this.items = Array.from(this.root.querySelectorAll('.accordion__item'));
        // Вешаем обработчики событий на каждый header
        this.items.forEach(item => {
            const header = item.querySelector('.accordion__header');
            if (header) {
                header.addEventListener('click', () => this.toggle(item));
            }
        });
    }

    // Метод для открытия/закрытия секции
    toggle(item) {
        // Если секция уже активна — закрываем её
        if (item.classList.contains('accordion__item--active')) {
            this.close(item);
        } else {
            // Закрываем все секции
            this.items.forEach(i => this.close(i));
            // Открываем выбранную секцию
            this.open(item);
        }
    }

    // Метод для открытия секции
    open(item) {
        item.classList.add('accordion__item--active');
        // Показываем контент
        const content = item.querySelector('.accordion__content');
        if (content) content.style.display = 'block';
        // Активируем синюю полоску
        const bar = item.querySelector('.accordion__bar');
        if (bar) bar.classList.add('accordion__bar--active');
    }

    // Метод для закрытия секции
    close(item) {
        item.classList.remove('accordion__item--active');
        // Скрываем контент
        const content = item.querySelector('.accordion__content');
        if (content) content.style.display = 'none';
        // Деактивируем синюю полоску
        const bar = item.querySelector('.accordion__bar');
        if (bar) bar.classList.remove('accordion__bar--active');
    }

    // Статический метод для инициализации всех аккордеонов на странице
    static initAll() {
        document.querySelectorAll('.accordion').forEach(acc => new Accordion(acc));
    }
}

// Автоматическая инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    Accordion.initAll();
});

/*
    Краткая навигация по коду:
    - class Accordion — основной класс для работы с аккордеоном
    - constructor — сохраняет root, находит все .accordion__item, вешает обработчики
    - toggle(item) — открывает/закрывает секцию, обеспечивает работу только одной активной секции
    - open(item) — добавляет классы активности, показывает контент, активирует полоску
    - close(item) — убирает классы активности, скрывает контент, деактивирует полоску
    - static initAll() — инициализирует все аккордеоны на странице
    - document.addEventListener('DOMContentLoaded', ...) — автозапуск после загрузки DOM

    Для стилизации и плавных анимаций используйте CSS-переходы в main.scss/_ui.scss.
*/
