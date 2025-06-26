// scripts/Button.js
// ������ ��� ���������� ����������� � ���������� ������ UI

/*
    ����������:
    - ���������� ������� �� hover � active (��������, ��������)
    - ��������� disabled (���������� ������)
    - ��������� loading (�� �������, � �����������)
    - ��������� ���������� ������ �� ��������
    - ����� ��������� ��� ��������� ������� (��������, �������� �����)
    ��� ��������� ����������� ����� ������, JS ������ ��� �������� ��� ������� ��������
*/

class UIButton {
    constructor(button) {
        this.button = button;

        // ���� ������ disabled, �� ������ �����������
        if (this.button.disabled) return;

        // Hover ������
        this.button.addEventListener('mouseenter', () => this.handleHover(true));
        this.button.addEventListener('mouseleave', () => this.handleHover(false));

        // Active ������
        this.button.addEventListener('mousedown', () => this.handleActive(true));
        this.button.addEventListener('mouseup', () => this.handleActive(false));
        this.button.addEventListener('mouseleave', () => this.handleActive(false));

        // (�������������) � ��������� loading
        // ����� �������� data-loading="true" ��� ������������
        if (this.button.dataset.loading === "true") {
            this.setLoading(true);
        }
    }

    handleHover(isHover) {
        if (isHover) {
            this.button.classList.add('ui-button--hover');
        } else {
            this.button.classList.remove('ui-button--hover');
        }
    }

    handleActive(isActive) {
        if (isActive) {
            this.button.classList.add('ui-button--active');
        } else {
            this.button.classList.remove('ui-button--active');
        }
    }

    // ����� ��� ��������� ��������� loading
    setLoading(isLoading) {
        if (isLoading) {
            this.button.classList.add('ui-button--loading');
            this.button.disabled = true;
            // ����� �������� ������� ������ ������
            if (!this.button.querySelector('.ui-button__spinner')) {
                const spinner = document.createElement('span');
                spinner.className = 'ui-button__spinner';
                this.button.appendChild(spinner);
            }
        } else {
            this.button.classList.remove('ui-button--loading');
            this.button.disabled = false;
            const spinner = this.button.querySelector('.ui-button__spinner');
            if (spinner) spinner.remove();
        }
    }

    // ����������� ����� ��� ������������� ���� ������ �� ��������
    static initAll() {
        document.querySelectorAll('.ui-button').forEach(btn => new UIButton(btn));
    }
}

// �������������� ������������� ��� �������� ��������
document.addEventListener('DOMContentLoaded', () => {
    UIButton.initAll();
});

/*
    ������� ��������� �� ����:
    - class UIButton � �������� ����� ��� ���������� �������
    - constructor � ���������� ����������� �� hover, active, loading
    - handleHover/handleActive � ���������/������� ������ ��� ��������
    - setLoading � ��������/��������� ��������� �������� (� ����������� � ���������)
    - static initAll � ������������� ���� .ui-button �� ��������
    ��� ���������� ����������� main.scss/_ui.scss
*/
