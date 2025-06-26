<?php
// components/checkbox.php
// ��������� "�������" ��� UI-�����

/*
    �������� ��������:
    - �������� (�������)
    - ���������� (�� �������)
    - Disabled (������������)
    - � ������� (���� ��������� �� ������)
*/

/*
    ��� ���������� �������� ������������ ������:
    - .ui-checkbox � �������� ��������� ��������
    - .ui-checkbox__input � ������� input[type=checkbox]
    - .ui-checkbox__box � ���������� ����� �������� (�������� ����� CSS)
    - .ui-checkbox__check � ������ ������� (����� SVG ��� CSS)
    - .ui-checkbox__label � ������� � ��������
    - .ui-checkbox--error � ����������� ��� ��������� ������
    - .ui-checkbox--disabled � ����������� ��� ���������������� ��������
*/
?>

<!-- �������� ������� (�������) -->
<label class="ui-checkbox">
    <input class="ui-checkbox__input" type="checkbox" checked>
    <span class="ui-checkbox__box">
        <!-- ������� (����� SVG ��� CSS) -->
        <span class="ui-checkbox__check"></span>
    </span>
    <span class="ui-checkbox__label">� �������� � ���������</span>
</label>

<!-- ���������� ������� (�� �������) -->
<label class="ui-checkbox">
    <input class="ui-checkbox__input" type="checkbox">
    <span class="ui-checkbox__box">
        <span class="ui-checkbox__check"></span>
    </span>
    <span class="ui-checkbox__label">�������� ��������</span>
</label>

<!-- Disabled ������� (������������) -->
<label class="ui-checkbox ui-checkbox--disabled">
    <input class="ui-checkbox__input" type="checkbox" disabled>
    <span class="ui-checkbox__box">
        <span class="ui-checkbox__check"></span>
    </span>
    <span class="ui-checkbox__label">����������</span>
</label>

<!-- ������� � ������� -->
<label class="ui-checkbox ui-checkbox--error">
    <input class="ui-checkbox__input" type="checkbox">
    <span class="ui-checkbox__box">
        <span class="ui-checkbox__check"></span>
    </span>
    <span class="ui-checkbox__label">������ ������</span>
</label>

<!-- 
    ����������� �� ���������:
    - .ui-checkbox � �������� label ��� �������� (������ ������������ ��� �������)
    - .ui-checkbox__input � ������� input[type=checkbox], ��������� ����������
    - .ui-checkbox__box � ���������� ����� �������� (�����, ���, ��������)
    - .ui-checkbox__check � �������, ���������� ��� checked (����� CSS ��� SVG)
    - .ui-checkbox__label � ������� ������ �� ��������
    - .ui-checkbox--disabled � ����������� ��� ������������ ���������
    - .ui-checkbox--error � ����������� ��� ��������� ������ (��������, ������� �����)
    ��� ���������� ������������ _ui.scss, ��� ������ � Checkbox.js (���� ����� ��������� ���������)
-->
