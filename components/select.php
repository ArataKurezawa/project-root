<?php
// components/select.php
// ��������� "���������� ������ (Select)" ��� UI-�����

/*
    �������� �������:
    - ������� (������ ������� �� ���������)
    - �������� (���������� ����, ��� ������������ �������� ����� .ui-select--open)
    - Disabled (������������)
    - � ������� (���� ��������� �� ������)
*/

/*
    ��� ���������� ������������ ������:
    - .ui-select � �������� ��������� �������
    - .ui-select__field � ������� select (��� �����������)
    - .ui-select__current � ����������� ���������� ��������
    - .ui-select__icon � ������ ������� (����� CSS ��� SVG)
    - .ui-select__dropdown � ���������� ���� � ����������
    - .ui-select__option � ��������� ����� ����
    - .ui-select--open � ����������� ��� ��������� ����
    - .ui-select--disabled � ����������� ��� ���������������� ���������
    - .ui-select--error � ����������� ��� ��������� ������
    ��� ������ ��������� JS (CustomSelect.js)
*/
?>

<!-- ������� ������ (������ ������� �� ���������) -->
<div class="ui-select">
    <!-- ������� �������� select ��� ����������� -->
    <select class="ui-select__field" name="city" id="city1">
        <option value="" disabled selected>�������� �����</option>
        <option value="moscow">������</option>
        <option value="spb">�����-���������</option>
        <option value="novosibirsk">�����������</option>
    </select>
    <!-- ����������� ���������� �������� -->
    <div class="ui-select__current">�������� �����</div>
    <!-- ������ ������� -->
    <span class="ui-select__icon"></span>
    <!-- ���������� ���� -->
    <div class="ui-select__dropdown">
        <div class="ui-select__option" data-value="moscow">������</div>
        <div class="ui-select__option" data-value="spb">�����-���������</div>
        <div class="ui-select__option" data-value="novosibirsk">�����������</div>
    </div>
</div>

<!-- �������� ������ (��� ����� �������� ����� .ui-select--open) -->
<div class="ui-select ui-select--open">
    <select class="ui-select__field" name="city" id="city2">
        <option value="" disabled selected>�������� �����</option>
        <option value="moscow">������</option>
        <option value="spb">�����-���������</option>
        <option value="novosibirsk">�����������</option>
    </select>
    <div class="ui-select__current">������</div>
    <span class="ui-select__icon"></span>
    <div class="ui-select__dropdown">
        <div class="ui-select__option" data-value="moscow">������</div>
        <div class="ui-select__option" data-value="spb">�����-���������</div>
        <div class="ui-select__option" data-value="novosibirsk">�����������</div>
    </div>
</div>

<!-- Disabled ������ (������������) -->
<div class="ui-select ui-select--disabled">
    <select class="ui-select__field" name="city" id="city3" disabled>
        <option value="" disabled selected>�������� �����</option>
        <option value="moscow">������</option>
        <option value="spb">�����-���������</option>
        <option value="novosibirsk">�����������</option>
    </select>
    <div class="ui-select__current">�������� �����</div>
    <span class="ui-select__icon"></span>
    <div class="ui-select__dropdown">
        <div class="ui-select__option" data-value="moscow">������</div>
        <div class="ui-select__option" data-value="spb">�����-���������</div>
        <div class="ui-select__option" data-value="novosibirsk">�����������</div>
    </div>
</div>

<!-- ������ � ������� -->
<div class="ui-select ui-select--error">
    <select class="ui-select__field" name="city" id="city4">
        <option value="" disabled selected>�������� �����</option>
        <option value="moscow">������</option>
        <option value="spb">�����-���������</option>
        <option value="novosibirsk">�����������</option>
    </select>
    <div class="ui-select__current">������ ������</div>
    <span class="ui-select__icon"></span>
    <div class="ui-select__dropdown">
        <div class="ui-select__option" data-value="moscow">������</div>
        <div class="ui-select__option" data-value="spb">�����-���������</div>
        <div class="ui-select__option" data-value="novosibirsk">�����������</div>
    </div>
    <!-- ��������� �� ������ -->
    <div class="ui-select__error">����������, �������� �����</div>
</div>

<!-- 
    ����������� �� ���������:
    - .ui-select � ������ ���������� �������
    - .ui-select__field � ������� �������� select ��� ����������� � �������� �����
    - .ui-select__current � ���������� ��������� ��������
    - .ui-select__icon � ������� (�������� ����� CSS ��� SVG)
    - .ui-select__dropdown � ��������� � ���������� ������ (����������� �� �����)
    - .ui-select__option � ��������� ������� � ���� (����� ����� JS)
    - .ui-select--open � ������ ������ (���������� ���� �����)
    - .ui-select--disabled � ������ ������������ (disabled)
    - .ui-select--error � ������ ������ (������� �����, ����� ������)
    - .ui-select__error � ��������� �� ������
    ��� ���������� ������������ _ui.scss, ��� ������ � CustomSelect.js (��������, �����, ������������� � select)
-->
