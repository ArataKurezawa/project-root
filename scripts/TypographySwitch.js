// scripts/TypographySwitch.js
// ������ ��� ������������ ��������� ����������� �� ��������

/*
    ����������:
    - ��������� ������������ ����������� ����� ������� ���������� ����������� ������ (��������, �������, �������, �����������)
    - ��������� ��������� ������� � localStorage (����� ����������� ����� ��������������)
    - ��������� ��������� ������� �� ����� ����� ����� ���������� ������ �� <body> ��� <html>
    - ��������� ���������� ��������� (��������, "default", "large", "contrast")
    - ����� ������������ ������, ������ ��� toggle ��� ����������
*/

class TypographySwitch {
    constructor(options = {}) {
        this.selector = options.selector || '.typography-switch [data-typography]';
        this.storageKey = options.storageKey || 'typographyMode';
        this.classPrefix = options.classPrefix || 'typography-';
        this.defaultMode = options.defaultMode || 'default';

        // ����� ��� �������� ����������
        this.buttons = Array.from(document.querySelectorAll(this.selector));
        // ������ ���� ��������� ������� (�� data-typography)
        this.modes = this.buttons.map(btn => btn.dataset.typography);

        // ��������� ���������� ��� ��������� �����
        this.applyMode(this.getSavedMode());

        // �������� ����������� �� ������
        this.buttons.forEach(btn => {
            btn.addEventListener('click', () => {
                const mode = btn.dataset.typography;
                this.applyMode(mode);
                this.saveMode(mode);
            });
        });
    }

    // �������� ���������� ����� ��� ���������
    getSavedMode() {
        return localStorage.getItem(this.storageKey) || this.defaultMode;
    }

    // ��������� ��������� �����
    saveMode(mode) {
        localStorage.setItem(this.storageKey, mode);
    }

    // ��������� �����: �������� ����� �� <body> � ���������� �������� ������
    applyMode(mode) {
        // ������� ��� ������ ����������� � <body>
        this.modes.forEach(m => document.body.classList.remove(this.classPrefix + m));
        // �������� ���������
        document.body.classList.add(this.classPrefix + mode);

        // ���������� �������� ������
        this.buttons.forEach(btn => {
            if (btn.dataset.typography === mode) {
                btn.classList.add('typography-switch__button--active');
            } else {
                btn.classList.remove('typography-switch__button--active');
            }
        });
    }

    // ����������� ����� ��� ������������� �� ��������
    static initAll(options = {}) {
        new TypographySwitch(options);
    }
}

// �������������� ������������� ��� �������� ��������
document.addEventListener('DOMContentLoaded', () => {
    TypographySwitch.initAll();
});

/*
    ������� ��������� �� ����:
    - class TypographySwitch � �������� ����� ��� ������������� �����������
    - constructor � �������� ������, ������, ��������� ���������� �����, ������ �����������
    - getSavedMode/saveMode � ������ � localStorage
    - applyMode � ���������/������� ������ �� <body>, ������������ �������� ������
    - static initAll � ������� �������������
    ��� ���������� ����������� main.scss/_typography.scss � ������ .typography-default, .typography-large, .typography-contrast � �.�.
*/
