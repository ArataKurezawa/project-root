<?php
// components/input.php
// ��������� "��������� ���� E-mail" ��� UI-�����

/*
    �������� ����:
    - ������� (������)
    - � ������ (� ��������� ������������)
    - � ������� (��������, ������������ email)
    - Disabled (�������������)
*/

/*
    ��� ���������� ������������ ������:
    - .ui-input � �������� ��������� ����
    - .ui-input__field � input[type=email]
    - .ui-input__label � ��������� �����������
    - .ui-input--error � ����������� ��� ��������� ������
    - .ui-input--disabled � ����������� ��� ���������������� ����
    - .ui-input__error � ����� ������ ��� �����
    �������� � ��������� ����������� ����� CSS � JS
*/
?>

<!-- ������� ��������� ���� (������) -->
<div class="ui-input">
    <input class="ui-input__field" type="email" id="email1" name="email1" autocomplete="off" required>
    <label class="ui-input__label" for="email1">E-mail</label>
</div>

<!-- ��������� ���� � ������ (������ ��� �����, � ���������� ����� ����� JS/CSS) -->
<div class="ui-input ui-input--focused">
    <input class="ui-input__field" type="email" id="email2" name="email2" autocomplete="off" required>
    <label class="ui-input__label" for="email2">E-mail</label>
</div>

<!-- ��������� ���� � ������� -->
<div class="ui-input ui-input--error">
    <input class="ui-input__field" type="email" id="email3" name="email3" autocomplete="off" required>
    <label class="ui-input__label" for="email3">E-mail</label>
    <div class="ui-input__error">������� ���������� e-mail</div>
</div>

<!-- Disabled ��������� ���� -->
<div class="ui-input ui-input--disabled">
    <input class="ui-input__field" type="email" id="email4" name="email4" autocomplete="off" disabled>
    <label class="ui-input__label" for="email4">E-mail</label>
</div>

<!-- 
    ����������� �� ���������:
    - .ui-input � ������ ��� ������ ���� �����
    - .ui-input__field � ��� input[type=email]
    - .ui-input__label � ��������� �����������, ������� ����������� ��� ������/����������
    - .ui-input--focused � ����������� ��� ��������� ������ (��� ������������, ������ ����� JS/CSS)
    - .ui-input--error � ����������� ��� ��������� ������ (������� �����, ����� ������)
    - .ui-input__error � ����� ������ ��� �����
    - .ui-input--disabled � ����������� ��� ���������������� ���� (����� ���, ���������)
    ��� ���������� ������������ _ui.scss, ��� ������ � EmailInput.js (��������, ���������)
-->
