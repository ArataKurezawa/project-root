// scripts/Checkbox.js
// ������ ��� ���������� ���������� ���������� UI

/*
    ����������:
    - ������������ ��������� checked �� ����� �� label
    - ��������� disabled � error ��������� (����� ������)
    - ������������� ��������� .ui-checkbox__box � .ui-checkbox__check � input
    - ��������� ���������� ��������� �� ��������
    - ����� ��������� ��� ��������� ������� (��������, ��������� �����)
    ��� �������� ���������� ��������� ����������� ����� CSS, JS ����� ��� ������� ������ � ��������
*/

class UICheckbox {
    constructor(label) {
        this.label = label;
        this.input = label.querySelector('.ui-checkbox__input');
        this.box = label.querySelector('.ui-checkbox__box');
        this.check = label.querySelector('.ui-checkbox__check');

        // ���� ������� disabled � �� ������ �����������
        if (this.input.disabled) return;

        // ���� �� label � ����������� checked
        this.label.addEventListener('click', (e) => {
            // �� �����������, ���� ���� ��� �� ������ ������ label
            if (e.target.tagName.toLowerCase() === 'a') return;

            // ��������� ������������� ������ ���� �� disabled
            if (!this.input.disabled) {
                // �� ��� ������������ ��������� input ������ ������ ���������
                e.preventDefault();
                this.input.checked = !this.input.checked;
                this.update();
            }
        });

        // ������������� ��������� ��� ��������� input (��������, ����� JS)
        this.input.addEventListener('change', () => this.update());

        // ������������� ���������
        this.update();
    }

    update() {
        // ��������� ���������� ��������� .ui-checkbox__box � .ui-checkbox__check
        if (this.input.checked) {
            this.label.classList.add('ui-checkbox--checked');
        } else {
            this.label.classList.remove('ui-checkbox--checked');
        }
        // Disabled
        if (this.input.disabled) {
            this.label.classList.add('ui-checkbox--disabled');
        } else {
            this.label.classList.remove('ui-checkbox--disabled');
        }
        // Error (���� ���� .ui-checkbox--error)
        // ��������� error ����������� ������ ������� �� label
    }

    // ����������� ����� ��� ������������� ���� ��������� �� ��������
    static initAll() {
        document.querySelectorAll('.ui-checkbox').forEach(label => new UICheckbox(label));
    }
}

// �������������� ������������� ��� �������� ��������
document.addEventListener('DOMContentLoaded', () => {
    UICheckbox.initAll();
});

/*
    ������� ��������� �� ����:
    - class UICheckbox � �������� ����� ��� ���������� ���������
    - constructor � ���������� ����������� �� label � input
    - update � ��������� ������ ��������� (checked, disabled, error)
    - static initAll � ������������� ���� .ui-checkbox �� ��������
    ��� ���������� ����������� main.scss/_ui.scss
*/
