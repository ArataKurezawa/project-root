// scripts/EmailInput.js
// ������ ��� ���������� ����������� � ���������� ���� ����� e-mail

/*
    ����������:
    - �������� ���������� ������������ ��� ������ ��� ����������
    - ��������� e-mail � �������� ������� (�� ������ ������ �/��� �����)
    - ����������� ��������� ������ (���������� ������ � ����� ���������)
    - ��������� disabled ��������� (����� �������)
    - ����� ������������ ��� ���������� ����� �� ��������

    ��������� HTML ������ ��������������� ���������� input.php:
    .ui-input
        input.ui-input__field[type="email"]
        label.ui-input__label
        .ui-input__error (�� �������������)
*/

class EmailInput {
    constructor(root) {
        this.root = root;
        this.input = root.querySelector('.ui-input__field');
        this.label = root.querySelector('.ui-input__label');
        this.error = root.querySelector('.ui-input__error');

        if (!this.input) return;

        // �������� ������������: �����/����/����������
        this.input.addEventListener('focus', () => this.setFocused(true));
        this.input.addEventListener('blur', () => {
            this.setFocused(false);
            this.validate();
        });
        this.input.addEventListener('input', () => {
            this.updateFilled();
            if (this.root.classList.contains('ui-input--error')) {
                this.validate(); // live-��������� ��� ������
            }
        });

        // ������������� ���������
        this.updateFilled();
    }

    setFocused(isFocused) {
        if (isFocused) {
            this.root.classList.add('ui-input--focused');
        } else {
            this.root.classList.remove('ui-input--focused');
        }
    }

    updateFilled() {
        // ��� �������� ������������: ���� ���� �� ������ � label "�������"
        if (this.input.value) {
            this.root.classList.add('ui-input--filled');
        } else {
            this.root.classList.remove('ui-input--filled');
        }
    }

    validate() {
        // �������� ���������� e-mail
        const value = this.input.value.trim();
        let isValid = true;

        if (!value) {
            isValid = false;
            this.setError('���� �� ������ ���� ������');
        } else if (!this.isEmail(value)) {
            isValid = false;
            this.setError('������� ���������� e-mail');
        } else {
            this.clearError();
        }

        return isValid;
    }

    isEmail(value) {
        // ������� ��������� ��� �������� e-mail
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(value);
    }

    setError(message) {
        this.root.classList.add('ui-input--error');
        if (this.error) {
            this.error.textContent = message;
            this.error.style.display = 'block';
        } else {
            // ���� ����� ������ ��� � ������ ���
            const errorDiv = document.createElement('div');
            errorDiv.className = 'ui-input__error';
            errorDiv.textContent = message;
            this.root.appendChild(errorDiv);
            this.error = errorDiv;
        }
    }

    clearError() {
        this.root.classList.remove('ui-input--error');
        if (this.error) {
            this.error.textContent = '';
            this.error.style.display = 'none';
        }
    }

    // ����������� ����� ��� ������������� ���� email-����� �� ��������
    static initAll() {
        document.querySelectorAll('.ui-input').forEach(root => {
            const input = root.querySelector('.ui-input__field');
            if (input && input.type === 'email') new EmailInput(root);
        });
    }
}

// �������������� ������������� ��� �������� ��������
document.addEventListener('DOMContentLoaded', () => {
    EmailInput.initAll();
});

/*
    ������� ��������� �� ����:
    - class EmailInput � �������� ����� ��� email-����
    - constructor � ���������� ����������� �� focus, blur, input
    - setFocused � ���������/������� ����� ������
    - updateFilled � ��������� ��������� ���������� ������������
    - validate � ��������� ������������ e-mail, ����������/������� ������
    - setError/clearError � ���������� �������
    - static initAll � ������������� ���� email-����� �� ��������
    ��� ���������� ����������� main.scss/_ui.scss
*/
