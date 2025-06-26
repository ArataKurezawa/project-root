// scripts/SmoothScroll.js
// ������ ��� ������� ��������� � ������ �� ����� �� ������

/*
    ����������:
    - ������� ��������� � ������� �������� �� ����� �� ������ � href="#..."
    - ��������� �������� (��������, ���� ���� ������������� header)
    - ����� ������������ ��� ���� ���������� ������� ������ �� ��������
    - �� ������ ����������� ���������, ���� ������� �� ������

    ��� ������ �������� ������� data-scroll ��� ����� .smooth-scroll � �������, ���� ����������� ��� ���� ������ � href="#..."
*/

class SmoothScroll {
    constructor(options = {}) {
        // �������� ������ (��������, ������ �������������� header)
        this.offset = options.offset || 0;
        // �������� ������ (�� ��������� ��� <a> � href="#...")
        this.selector = options.selector || 'a[href^="#"]';
        // ����� �������� (ms)
        this.duration = options.duration || 500;

        this.init();
    }

    init() {
        document.querySelectorAll(this.selector).forEach(link => {
            // ���������� ������ ��� ������� �����
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
        // �������� ���������� � ������ ��������
        const rect = element.getBoundingClientRect();
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        const targetY = rect.top + scrollTop - this.offset;

        // ������� ��������� (modern browsers)
        window.scrollTo({
            top: targetY,
            behavior: 'smooth'
        });

        // ���� ����� ��������� ������ ��������� � ����� ����������� �������� ������� ����� requestAnimationFrame
    }

    // ����������� ����� ��� ������������� (��������, � ��������� offset)
    static initAll(options = {}) {
        new SmoothScroll(options);
    }
}

// �������������� ������������� ��� �������� ��������
document.addEventListener('DOMContentLoaded', () => {
    // ���� header ������������� � ��������� offset: document.querySelector('.site-header').offsetHeight
    SmoothScroll.initAll({
        offset: 0 // �������� �� ������ header, ���� �����
    });
});

/*
    ������� ��������� �� ����:
    - class SmoothScroll � �������� ����� ��� ������� ���������
    - constructor � ��������� offset, selector, duration
    - init � ���������� ����������� �� ��� ������� ������
    - scrollToElement � ������ ������������ � ������� ��������
    - static initAll � ������� ������������� � �����������
    ��� ���������� ��������� ����� ����������� CSS :target ��� JS.
*/
