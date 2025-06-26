// scripts/BurgerMenu.js
// Скрипт для управления бургер-меню на мобильных устройствах

/*
    Функционал:
    - Открытие и закрытие мобильного меню по клику на иконку "бургер"
    - Блокировка прокрутки body при открытом меню (по желанию)
    - Закрытие меню по клику вне меню или на пункт меню
    - Поддержка нескольких бургеров на странице (если потребуется)
    - Классы для работы: .burger (иконка), .mobile-menu (меню), .mobile-menu--open (открыто)
*/

class BurgerMenu {
    constructor(burgerSelector = '.burger', menuSelector = '.mobile-menu', openClass = 'mobile-menu--open') {
        this.burger = document.querySelector(burgerSelector);
        this.menu = document.querySelector(menuSelector);
        this.openClass = openClass;

        if (this.burger && this.menu) {
            this.burger.addEventListener('click', () => this.toggleMenu());
            // Закрытие меню по клику вне меню
            document.addEventListener('click', (e) => this.handleDocumentClick(e));
            // Закрытие по клику на пункт меню (если нужно)
            this.menu.addEventListener('click', (e) => {
                if (e.target.classList.contains('mobile-menu__link')) {
                    this.closeMenu();
                }
            });
        }
    }

    toggleMenu() {
        if (this.menu.classList.contains(this.openClass)) {
            this.closeMenu();
        } else {
            this.openMenu();
        }
    }

    openMenu() {
        this.menu.classList.add(this.openClass);
        this.burger.classList.add('burger--active');
        // Блокируем прокрутку body (по желанию)
        document.body.classList.add('no-scroll');
    }

    closeMenu() {
        this.menu.classList.remove(this.openClass);
        this.burger.classList.remove('burger--active');
        document.body.classList.remove('no-scroll');
    }

    handleDocumentClick(e) {
        // Если клик вне меню и вне бургера — закрыть меню
        if (
            this.menu.classList.contains(this.openClass) &&
            !this.menu.contains(e.target) &&
            !this.burger.contains(e.target)
        ) {
            this.closeMenu();
        }
    }

    // Статический метод для инициализации (если бургеров несколько)
    static initAll() {
        document.querySelectorAll('.burger').forEach((burger, i) => {
            // Для каждого бургера ищем соответствующее меню по data-атрибуту или порядку
            const menuSelector = burger.dataset.menu
                ? burger.dataset.menu
                : `.mobile-menu[data-menu="${i}"], .mobile-menu`;
            new BurgerMenu(
                `[data-burger="${i}"], .burger`, // селектор для текущего бургера
                menuSelector
            );
        });
    }
}

// Автоматическая инициализация при загрузке страницы
document.addEventListener('DOMContentLoaded', () => {
    // Если бургеров несколько — используйте BurgerMenu.initAll()
    // Если только один — достаточно new BurgerMenu()
    new BurgerMenu();
});

/*
    Краткая навигация по коду:
    - class BurgerMenu — основной класс для управления бургер-меню
    - constructor — инициализация, обработчики кликов
    - toggleMenu/openMenu/closeMenu — методы управления состоянием меню
    - handleDocumentClick — закрытие меню при клике вне меню
    - static initAll — для поддержки нескольких бургеров/меню на странице
    - document.body.classList.toggle('no-scroll') — блокировка прокрутки при открытом меню (стилизуйте .no-scroll в CSS)
    Для стилизации используйте main.scss/_burger.scss
*/
