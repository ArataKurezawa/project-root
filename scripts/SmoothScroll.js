// scripts/SmoothScroll.js
// Скрипт для плавной прокрутки к якорям по клику на ссылки

/*
    Функционал:
    - Плавная прокрутка к нужному элементу по клику на ссылку с href="#..."
    - Поддержка смещения (например, если есть фиксированный header)
    - Можно использовать для всех внутренних якорных ссылок на странице
    - Не мешает стандартной прокрутке, если элемент не найден

    Для работы добавьте атрибут data-scroll или класс .smooth-scroll к ссылкам, либо используйте для всех ссылок с href="#..."
*/

class SmoothScroll {
    constructor(options = {}) {
        // Смещение сверху (например, высота фиксированного header)
        this.offset = options.offset || 0;
        // Селектор ссылок (по умолчанию все <a> с href="#...")
        this.selector = options.selector || 'a[href^="#"]';
        // Время анимации (ms)
        this.duration = options.duration || 500;

        this.init();
    }

    init() {
        document.querySelectorAll(this.selector).forEach(link => {
            // Пропускаем пустые или внешние якоря
            const href = link.getAttribute('href');
            if (!href || href === '#' || href.length < 2) return;

            link.addEventListener('click', (e) => {
                const targetId = href.slice(1);
                const target = document.getElementById(targetId);
                if (target) {
                    e.preventDefault();
                    this.scrollToElement(target);
                }
            });
        });
    }

    scrollToElement(element) {
        // Получаем координаты с учётом смещения
        const rect = element.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const targetY = rect.top + scrollTop - this.offset;

        // Плавная прокрутка (modern browsers)
        window.scrollTo({
            top: targetY,
            behavior: 'smooth'
        });

        // Если нужна поддержка старых браузеров — можно реализовать анимацию вручную через requestAnimationFrame
    }

    // Статический метод для инициализации (например, с кастомным offset)
    static initAll(options = {}) {
        new SmoothScroll(options);
    }
}

// Автоматическая инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    // Если header фиксированный — передайте offset: document.querySelector('.site-header').offsetHeight
    SmoothScroll.initAll({
        offset: 0 // Измените на высоту header, если нужно
    });
});

/*
    Краткая навигация по коду:
    - class SmoothScroll — основной класс для плавной прокрутки
    - constructor — принимает offset, selector, duration
    - init — навешивает обработчики на все якорные ссылки
    - scrollToElement — плавно прокручивает к нужному элементу
    - static initAll — удобная инициализация с параметрами
    Для стилизации активного якоря используйте CSS :target или JS.
*/
