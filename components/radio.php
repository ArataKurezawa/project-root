<?php
// components/radio.php
// ��������� "�����������" ��� UI-�����

/*
    �������� �����������:
    - �������� (�������)
    - ���������� (�� �������)
    - Disabled (�������������)
    - � ������� (���� ��������� �� ������)
*/

/*
    ��� ���������� ����������� ������������ ������:
    - .ui-radio � �������� ��������� �����������
    - .ui-radio__input � ������� input[type=radio]
    - .ui-radio__circle � ���������� ����� ����������� (�������� ����� CSS)
    - .ui-radio__dot � ���������� ����� (���������� ��� ������)
    - .ui-radio__label � ������� � �����������
    - .ui-radio--error � ����������� ��� ��������� ������
    - .ui-radio--disabled � ����������� ��� ��������������� �����������
    ��� ������ ����������� ������������ ���������� ��� (name)
*/
?>

<!-- ������ ����������� (������: ����� ����) -->
<div class="ui-radio-group">
    <!-- �������� ����������� (�������) -->
    <label class="ui-radio">
        <input class="ui-radio__input" type="radio" name="gender" value="male" checked>
        <span class="ui-radio__circle">
            <span class="ui-radio__dot"></span>
        </span>
        <span class="ui-radio__label">�������</span>
    </label>

    <!-- ���������� ����������� (�� �������) -->
    <label class="ui-radio">
        <input class="ui-radio__input" type="radio" name="gender" value="female">
        <span class="ui-radio__circle">
            <span class="ui-radio__dot"></span>
        </span>
        <span class="ui-radio__label">�������</span>
    </label>

    <!-- Disabled ����������� (�������������) -->
    <label class="ui-radio ui-radio--disabled">
        <input class="ui-radio__input" type="radio" name="gender" value="other" disabled>
        <span class="ui-radio__circle">
            <span class="ui-radio__dot"></span>
        </span>
        <span class="ui-radio__label">������</span>
    </label>

    <!-- ����������� � ������� -->
    <label class="ui-radio ui-radio--error">
        <input class="ui-radio__input" type="radio" name="gender" value="none">
        <span class="ui-radio__circle">
            <span class="ui-radio__dot"></span>
        </span>
        <span class="ui-radio__label">������ ������</span>
    </label>
</div>

<!-- 
    ����������� �� ���������:
    - .ui-radio-group � ��������� ��� ������ ����������� (�����������, ��� ���������� ������)
    - .ui-radio � �������� label ��� ����� ����������� (������ ������������ ��� �������)
    - .ui-radio__input � ������� input[type=radio], ��������� ����������
    - .ui-radio__circle � ������� ���� ����������� (�����, ���, ��������)
    - .ui-radio__dot � ���������� �����, ���������� ���� radio ������ (checked)
    - .ui-radio__label � ������� ������ �� �����������
    - .ui-radio--disabled � ����������� ��� ������������ ��������� (����� ����, ������ not-allowed)
    - .ui-radio--error � ����������� ��� ��������� ������ (��������, ������� �����)
    ��� ���������� ������������ _ui.scss, ��� ������ � Radio.js (���� ����� ��������� ���������)
-->
