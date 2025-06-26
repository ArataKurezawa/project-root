// scripts/Accordion.js
// ����� ��� ���������� ����������� �� ��������

/*
    ����������:
    - ��������/�������� ������ ���������� �� �����
    - ������ ���� ������ ������� ������������ (�� ���������)
    - ������������ ������� ���������� � ��������� ��������
    - ��������� ���������� ����������� �� ��������

    ��������� HTML ��� ������ ������� ������ ��������������� ���������� accordion.php:
    .accordion
        .accordion__item
            .accordion__header (������)
            .accordion__content (�������/�������� ����)
            .accordion__bar (������� �������)
*/

class Accordion {
    // ����������� ��������� �������� ������� ����������
    constructor(root) {
        // ��������� �������� �������
        this.root = root;
        // ������� ��� �������� ���������� ������ root
        this.items = Array.from(this.root.querySelectorAll('.accordion__item'));
        // ������ ����������� ������� �� ������ header
        this.items.forEach(item => {
            const header = item.querySelector('.accordion__header');
            if (header) {
                header.addEventListener('click', () => this.toggle(item));
            }
        });
    }

    // ����� ��� ��������/�������� ������
    toggle(item) {
        // ���� ������ ��� ������� � ��������� �
        if (item.classList.contains('accordion__item--active')) {
            this.close(item);
        } else {
            // ��������� ��� ������
            this.items.forEach(i => this.close(i));
            // ��������� ��������� ������
            this.open(item);
        }
    }

    // ����� ��� �������� ������
    open(item) {
        item.classList.add('accordion__item--active');
        // ���������� �������
        const content = item.querySelector('.accordion__content');
        if (content) content.style.display = 'block';
        // ���������� ����� �������
        const bar = item.querySelector('.accordion__bar');
        if (bar) bar.classList.add('accordion__bar--active');
    }

    // ����� ��� �������� ������
    close(item) {
        item.classList.remove('accordion__item--active');
        // �������� �������
        const content = item.querySelector('.accordion__content');
        if (content) content.style.display = 'none';
        // ������������ ����� �������
        const bar = item.querySelector('.accordion__bar');
        if (bar) bar.classList.remove('accordion__bar--active');
    }

    // ����������� ����� ��� ������������� ���� ����������� �� ��������
    static initAll() {
        document.querySelectorAll('.accordion').forEach(acc => new Accordion(acc));
    }
}

// �������������� ������������� ��� �������� ��������
document.addEventListener('DOMContentLoaded', () => {
    Accordion.initAll();
});

/*
    ������� ��������� �� ����:
    - class Accordion � �������� ����� ��� ������ � �����������
    - constructor � ��������� root, ������� ��� .accordion__item, ������ �����������
    - toggle(item) � ���������/��������� ������, ������������ ������ ������ ����� �������� ������
    - open(item) � ��������� ������ ����������, ���������� �������, ���������� �������
    - close(item) � ������� ������ ����������, �������� �������, ������������ �������
    - static initAll() � �������������� ��� ���������� �� ��������
    - document.addEventListener('DOMContentLoaded', ...) � ���������� ����� �������� DOM

    ��� ���������� � ������� �������� ����������� CSS-�������� � main.scss/_ui.scss.
*/
