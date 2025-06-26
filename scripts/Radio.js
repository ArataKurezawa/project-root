// scripts/Radio.js
// ������ ��� ���������� ���������� ������������� UI

/*
    ����������:
    - ������������ ��������� checked �� ����� �� label
    - ��������� disabled � error ��������� (����� ������)
    - ������������� ��������� .ui-radio__circle � .ui-radio__dot � input
    - ��������� ���������� ����� ����������� �� ��������
    - ����� ��������� ��� ��������� ������� (��������, ��������� �����)
    ��� �������� ���������� ��������� ����������� ����� CSS, JS ����� ��� ������� ������ � ��������
*/

class UIRadio {
    constructor(label) {
        this.label = label;
        this.input = label.querySelector('.ui-radio__input');
        this.circle = label.querySelector('.ui-radio__circle');
        this.dot = label.querySelector('.ui-radio__dot');

        // ���� ����������� disabled � �� ������ �����������
        if (this.input.disabled) return;

        // ���� �� label � ����������� checked
        this.label.addEventListener('click', (e) => {
            // �� �����������, ���� ���� ��� �� ������ ������ label
            if (e.target.tagName.toLowerCase() === 'a') return;

            // ������ ���� �� disabled
            if (!this.input.disabled) {
                // �� ��� ������������ ��������� input ������ ������ ���������
                e.preventDefault();
                this.input.checked = true;
                this.updateGroup();
            }
        });

        // ������������� ��������� ��� ��������� input (��������, ����� JS)
        this.input.addEventListener('change', () => this.updateGroup());

        // ������������� ���������
        this.updateGroup();
    }

    updateGroup() {
        // �������� ��� radio � ����� �� name
        const name = this.input.name;
        const radios = document.querySelectorAll(`input[type="radio"][name="${name}"]`);
        radios.forEach(input => {
            const label = input.closest('.ui-radio');
            if (!label) return;
            if (input.checked) {
                label.classList.add('ui-radio--checked');
            } else {
                label.classList.remove('ui-radio--checked');
            }
            // Disabled
            if (input.disabled) {
                label.classList.add('ui-radio--disabled');
            } else {
                label.classList.remove('ui-radio--disabled');
            }
            // Error (���� ���� .ui-radio--error)
            // ��������� error ����������� ������ ������� �� label
        });
    }

    // ����������� ����� ��� ������������� ���� ����������� �� ��������
    static initAll() {
        document.querySelectorAll('.ui-radio').forEach(label => new UIRadio(label));
    }
}

// �������������� ������������� ��� �������� ��������
document.addEventListener('DOMContentLoaded', () => {
    UIRadio.initAll();
});

/*
    ������� ��������� �� ����:
    - class UIRadio � �������� ����� ��� ���������� ������������
    - constructor � ���������� ����������� �� label � input
    - updateGroup � ��������� ������ ��������� (checked, disabled, error) ��� ���� ������
    - static initAll � ������������� ���� .ui-radio �� ��������
    ��� ���������� ����������� main.scss/_ui.scss
*/
