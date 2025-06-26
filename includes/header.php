<?php
// includes/header.php
// ������� ���������� (header) �����. ��������� �� ���� ���������.

/*
    � ���� ����� ������ ���������:
    - ������� ��� �������� �����
    - ������������� ���� (���� ����)
    - ��� ������������ � ��������� (�� config/user.php)
    - ���������� ������ (�����������)
    - ����� �������������� �������� �� ������
    - ����������� ����������������� ������
*/

// ���������� ������ ������������ ��� ������ � ������
$user = include __DIR__ . '/../config/user.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>�������� �����</title>
    <!-- ����������� ����������������� ������ Graphik LCG -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/mfd/e7842774e037edf15919037594a79b2b/raw/665bdfc532094318449f1010323c84013d5af953/graphik.css">
    <!-- ����������� ��������� CSS (main.css) -->
    <link rel="stylesheet" href="/styles/main.css">
</head>
<body>
<header class="site-header">
    <div class="site-header__container">
        <!-- ������� ��� �������� ����� -->
        <div class="site-header__logo">
            <!-- ����� �������� �� ��������, ���� ��������� -->
            <span class="site-header__logo-text">�������� �����</span>
        </div>

        <!-- ������������� ���� (���� ����, ����� �������� ������) -->
        <nav class="site-header__nav">
            <ul class="site-header__menu">
                <li><a href="/" class="site-header__menu-link">�������</a></li>
                <li><a href="#ui" class="site-header__menu-link">UI Kit</a></li>
                <li><a href="#contacts" class="site-header__menu-link">��������</a></li>
            </ul>
        </nav>

        <!-- ���� ������������: ��� � ��������� -->
        <div class="site-header__user">
            <span class="site-header__user-fio"><?= htmlspecialchars($user['fio']) ?></span>
            <span class="site-header__user-position"><?= htmlspecialchars($user['position']) ?></span>
        </div>
    </div>
</header>

<!-- 
    ����������� �� ���������:
    - .site-header � �������� ��������� ������
    - .site-header__container � ������� ��� ������������� � ��������
    - .site-header__logo � ���� �������� ��� �������� �����
    - .site-header__logo-text � ����� �������� (����� �������� �� <img>)
    - .site-header__nav � ��������� ���������
    - .site-header__menu � ������ ������� ����
    - .site-header__menu-link � ������ ����
    - .site-header__user � ���� ������������ (��� � ���������)
    - .site-header__user-fio � ��� ������������
    - .site-header__user-position � ��������� ������������
    ��� ���������� ������������ main.scss/_header.scss
    �� �������� ������� <body> � <
