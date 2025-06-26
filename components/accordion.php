<?php
// components/accordion.php
// ��������� "���������" ��� UI-�����

?>

<!-- ��������� ���������� -->
<div class="accordion">

    <!-- ������ ������� ���������� (�� ��������� ������) -->
    <div class="accordion__item accordion__item--active">
        <!-- ��������� ���������� -->
        <button class="accordion__header" type="button">
            <!-- ����� ��������� -->
            <span class="accordion__title">��������� 1</span>
            <!-- ������ ������� -->
            <span class="accordion__icon"></span>
        </button>
        <!-- �������, ������� ������������ -->
        <div class="accordion__content" style="display: block;">
            <p>
                <!-- ������ ���������� ������ -->
                ��� ���������� ������� ����������. ����� ����� ���� ����� ����� ��� HTML.
            </p>
        </div>
        <!-- ����� ������� ��� �������� ����������� -->
        <div class="accordion__bar accordion__bar--active"></div>
    </div>

    <!-- ������ ������� ���������� (�� ��������� ������) -->
    <div class="accordion__item">
        <!-- ��������� ���������� -->
        <button class="accordion__header" type="button">
            <span class="accordion__title">��������� 2</span>
            <span class="accordion__icon"></span>
        </button>
        <div class="accordion__content">
            <p>
                ��� ���������� ������� ����������.
            </p>
        </div>
        <!-- ����� ��� ��� ���������� ����������� -->
        <div class="accordion__bar"></div>
    </div>

    <!-- ������ ������� ���������� (�� ��������� ������) -->
    <div class="accordion__item">
        <button class="accordion__header" type="button">
            <span class="accordion__title">��������� 3</span>
            <span class="accordion__icon"></span>
        </button>
        <div class="accordion__content">
            <p>
                ��� ���������� �������� ����������.
            </p>
        </div>
        <div class="accordion__bar"></div>
    </div>

</div>

<!-- 
    ����������� �� ���������:
    - .accordion � �������� ��������� ����������
    - .accordion__item � ��������� ������� ����������
    - .accordion__item--active � ����������� ��� ��������� ����������
    - .accordion__header � ������-��������� ����������
    - .accordion__title � ����� ���������
    - .accordion__icon � ������-������� (����������� ����� CSS)
    - .accordion__content � ����������/������������ �������
    - .accordion__bar � ������� ��� ����������� (���� � ������� �������� �� ���������)
    - .accordion__bar--active � ����������� ��� �������� (����� � �������) �������

    ��� ������ ���������� ����������� JS ��� ������������ ������� � ���������� ����������.
    ��� ���������� � SCSS � _ui.scss.
-->
