// scripts/main.js
// ������� ���� ������������� ���� UI-����������� � �������� �������

/*
    ����������:
    - ������ � ������������� ���� �������/������� UI (Accordion, BurgerMenu, Button, Checkbox, CustomSelect, EmailInput, Radio, SmoothScroll, TypographySwitch)
    - ����� ���������� ��������� ���������� ��� ���� �������
    - ��� ������������� ����������� ����� �������� DOM
    - ���� ����������� ES-������ � ����������� import, ���� ������� ������� � ������ ��������� �������������
*/

// ���� ����������� ES-������ (import), ���������������� ������ ���� � ����������� ��������������� �����:
// import Accordion from './Accordion.js';
// import BurgerMenu from './BurgerMenu.js';
// import UIButton from './Button.js';
// import UICheckbox from './Checkbox.js';
// import CustomSelect from './CustomSelect.js';
// import EmailInput from './EmailInput.js';
// import UIRadio from './Radio.js';
// import SmoothScroll from './SmoothScroll.js';
// import TypographySwitch from './TypographySwitch.js';

// ���� ��� ������ ���������� ����� <script> � HTML, ������ ��������� �� �������������:

document.addEventListener('DOMContentLoaded', () => {
    // ������������� UI-�����������
    if (typeof Accordion !== 'undefined') Accordion.initAll();
    if (typeof BurgerMenu !== 'undefined') BurgerMenu.initAll && BurgerMenu.initAll();
    if (typeof UIButton !== 'undefined') UIButton.initAll();
    if (typeof UICheckbox !== 'undefined') UICheckbox.initAll();
    if (typeof CustomSelect !== 'undefined') CustomSelect.initAll();
    if (typeof EmailInput !== 'undefined') EmailInput.initAll();
    if (typeof UIRadio !== 'undefined') UIRadio.initAll();
    if (typeof SmoothScroll !== 'undefined') SmoothScroll.initAll({ offset: 0 }); // offset � ���� ���� ������������� header
    if (typeof TypographySwitch !== 'undefined') TypographySwitch.initAll();

    // ����� ����� �������� �������������� ������������� ��� ��������� �������
    // ��������, ������������� ��������, ������� � �.�.
});

/*
    ������� ��������� �� ����:
    - ���� �������� JS-��� ������� ���������������� �����
    - ��� ������� ���������� ���������� ����������� ����� initAll()
    - ����� ��������� ���� ��������� ������� ��� ��������� ����������
    - ��� ��������� ES-������� ����������� import � export � ������ ������
    ��� ���������� ����������� main.scss � ��������������� partials
*/
