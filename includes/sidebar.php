<?php
// includes/sidebar.php
// ������� ������ (sidebar) �����. ����� �������������� ��� �������������� ���������, ������ ��� ����������.

/*
    � ���� ����� ������ ���������:
    - ������������� ������ �� �������� ����� ��� ��������
    - ������� ������ �� UI-����������, �������, ������������
    - ���������� ���������� ��� ������� (�� ������)
    - ����� �������������� ��������, ������� �� ������ � header/footer
    - ����� ������������ ��� ����������� ���� ��� ���������
    ��� ���������� sidebar ������������ main.scss/_sidebar.scss
*/
?>

<aside class="site-sidebar">
    <nav class="site-sidebar__nav">
        <ul class="site-sidebar__menu">
            <!-- ������ �� �������� ������� ����� -->
            <li class="site-sidebar__menu-item">
                <a href="#intro" class="site-sidebar__menu-link">��������</a>
            </li>
            <li class="site-sidebar__menu-item">
                <a href="#grid" class="site-sidebar__menu-link">�����</a>
            </li>
            <li class="site-sidebar__menu-item">
                <a href="#typography" class="site-sidebar__menu-link">�����������</a>
            </li>
            <li class="site-sidebar__menu-item">
                <a href="#ui" class="site-sidebar__menu-link">UI Kit</a>
            </li>
            <li class="site-sidebar__menu-item">
                <a href="#contacts" class="site-sidebar__menu-link">��������</a>
            </li>
        </ul>
    </nav>

    <!-- �������������� ���� (��������, �������� ��� �������� ������) -->
    <div class="site-sidebar__extra">
        <p class="site-sidebar__extra-title">�������� ������</p>
        <ul class="site-sidebar__extra-list">
            <li><a href="https://www.figma.com/" target="_blank" class="site-sidebar__extra-link">Figma</a></li>
            <li><a href="https://developer.mozilla.org/ru/" target="_blank" class="site-sidebar__extra-link">MDN Docs</a></li>
            <li><a href="https://css-tricks.com/" target="_blank" class="site-sidebar__extra-link">CSS-Tricks</a></li>
        </ul>
    </div>
</aside>

<!-- 
    ����������� �� ���������:
    - .site-sidebar � �������� ��������� ������� ������
    - .site-sidebar__nav � ������������� ���� (����)
    - .site-sidebar__menu � ������ �������� ������
    - .site-sidebar__menu-item � ����� ����
    - .site-sidebar__menu-link � ������ �� ������
    - .site-sidebar__extra � �������������� ���� (��������, �������� ������ ��� ��������)
    - .site-sidebar__extra-title � ��������� ��������������� �����
    - .site-sidebar__extra-list � ������ �������������� ������
    - .site-sidebar__extra-link � ������ �� ������� ������
    ��� ���������� ������������ main.scss/_sidebar.scss
-->
