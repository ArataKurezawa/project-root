// scripts/BurgerMenu.js
// ������ ��� ���������� ������-���� �� ��������� �����������

/*
    ����������:
    - �������� � �������� ���������� ���� �� ����� �� ������ "������"
    - ���������� ��������� body ��� �������� ���� (�� �������)
    - �������� ���� �� ����� ��� ���� ��� �� ����� ����
    - ��������� ���������� �������� �� �������� (���� �����������)
    - ������ ��� ������: .burger (������), .mobile-menu (����), .mobile-menu--open (�������)
*/

class BurgerMenu {
    constructor(burgerSelector = '.burger', menuSelector = '.mobile-menu', openClass = 'mobile-menu--open') {
        this.burger = document.querySelector(burgerSelector);
        this.menu = document.querySelector(menuSelector);
        this.openClass = openClass;

        if (this.burger && this.menu) {
            this.burger.addEventListener('click', () => this.toggleMenu());
            // �������� ���� �� ����� ��� ����
            document.addEventListener('click', (e) => this.handleDocumentClick(e));
            // �������� �� ����� �� ����� ���� (���� �����)
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
        // ��������� ��������� body (�� �������)
        document.body.classList.add('no-scroll');
    }

    closeMenu() {
        this.menu.classList.remove(this.openClass);
        this.burger.classList.remove('burger--active');
        document.body.classList.remove('no-scroll');
    }

    handleDocumentClick(e) {
        // ���� ���� ��� ���� � ��� ������� � ������� ����
        if (
            this.menu.classList.contains(this.openClass) &&
            !this.menu.contains(e.target) &&
            !this.burger.contains(e.target)
        ) {
            this.closeMenu();
        }
    }

    // ����������� ����� ��� ������������� (���� �������� ���������)
    static initAll() {
        document.querySelectorAll('.burger').forEach((burger, i) => {
            // ��� ������� ������� ���� ��������������� ���� �� data-�������� ��� �������
            const menuSelector = burger.dataset.menu
                ? burger.dataset.menu
                : `.mobile-menu[data-menu="${i}"], .mobile-menu`;
            new BurgerMenu(
                `[data-burger="${i}"], .burger`, // �������� ��� �������� �������
                menuSelector
            );
        });
    }
}

// �������������� ������������� ��� �������� ��������
document.addEventListener('DOMContentLoaded', () => {
    // ���� �������� ��������� � ����������� BurgerMenu.initAll()
    // ���� ������ ���� � ���������� new BurgerMenu()
    new BurgerMenu();
});

/*
    ������� ��������� �� ����:
    - class BurgerMenu � �������� ����� ��� ���������� ������-����
    - constructor � �������������, ����������� ������
    - toggleMenu/openMenu/closeMenu � ������ ���������� ���������� ����
    - handleDocumentClick � �������� ���� ��� ����� ��� ����
    - static initAll � ��� ��������� ���������� ��������/���� �� ��������
    - document.body.classList.toggle('no-scroll') � ���������� ��������� ��� �������� ���� (���������� .no-scroll � CSS)
    ��� ���������� ����������� main.scss/_burger.scss
*/
