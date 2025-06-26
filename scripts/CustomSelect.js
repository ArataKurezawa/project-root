// scripts/CustomSelect.js
// ������ ��� ���������� ��������� ���������� ������� (select)

/*
    ����������:
    - ��������/�������� ����������� ���� �� ����� �� ������� �������
    - ����� �������� �� ������ � ������������� � �������� <select>
    - �������� ���� �� ����� ��� select ��� ��� ������ �����
    - ��������� disabled � error ��������� ����� ������
    - ����� ������������ ��������� ��������� �������� �� ��������

    ��������� HTML ������ ��������������� ���������� select.php:
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

        // ���� ������ disabled � �� ������ �����������
        if (this.select.disabled) {
            this.root.classList.add('ui-select--disabled');
            return;
        }

        // ��������/�������� ���� �� ����� �� .ui-select__current ��� .ui-select__icon
        [this.current, this.icon].forEach(el => {
            if (el) el.addEventListener('click', (e) => {
                e.stopPropagation();
                this.toggle();
            });
        });

        // ����� �����
        this.options.forEach(option => {
            option.addEventListener('click', (e) => {
                e.stopPropagation();
                this.selectOption(option);
                this.close();
            });
        });

        // �������� ���� �� ����� ��� �������
        document.addEventListener('click', (e) => {
            if (this.isOpen && !this.root.contains(e.target)) {
                this.close();
            }
        });

        // ������������� ��� ��������� ��������� select (��������, ����� JS)
        this.select.addEventListener('change', () => {
            this.updateCurrent();
        });

        // ������������� �������� ��������
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
        // ������������� �������� � �������� select
        this.select.value = value;
        // �������� ������� change ��� select
        this.select.dispatchEvent(new Event('change', { bubbles: true }));
        // ��������� �����������
        this.updateCurrent();
    }

    updateCurrent() {
        // ������� ��������� �����
        const selectedOption = this.options.find(opt => opt.getAttribute('data-value') === this.select.value);
        if (selectedOption) {
            this.current.textContent = selectedOption.textContent;
        } else {
            // ���� ������ �� ������� � placeholder
            const placeholder = this.select.querySelector('option[disabled][selected]');
            this.current.textContent = placeholder ? placeholder.textContent : '��������...';
        }
        // ������������ ��������� ����� � dropdown
        this.options.forEach(opt => {
            if (opt.getAttribute('data-value') === this.select.value) {
                opt.classList.add('ui-select__option--selected');
            } else {
                opt.classList.remove('ui-select__option--selected');
            }
        });
    }

    // ����������� ����� ��� ������������� ���� ��������� select �� ��������
    static initAll() {
        document.querySelectorAll('.ui-select').forEach(root => new CustomSelect(root));
    }
}

// �������������� ������������� ��� �������� ��������
document.addEventListener('DOMContentLoaded', () => {
    CustomSelect.initAll();
});

/*
    ������� ��������� �� ����:
    - class CustomSelect � �������� ����� ��� ���������� select
    - constructor � �������������, ����������� �������
    - toggle/open/close � ���������� ���������� ����
    - selectOption � ����� ����� � ������������� � �������� select
    - updateCurrent � ���������� ����������� ���������� ��������
    - static initAll � ������������� ���� .ui-select �� ��������
    ��� ���������� ����������� main.scss/_ui.scss
*/
