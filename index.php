<?php
// index.php
// ������� ����� ����� ��� �����. ���������� ��� �������� ������ � partials.

/*
  �������������� ���������:
  - /config/user.php           � ������ ������������ (���, �������� � ��.)
  - /partials/header.php       � ����� �����
  - /partials/footer.php       � ����� �����
  - /sections/intro.php        � ������� ������
  - /sections/grid.php         � ������ �����
  - /sections/typography.php   � ������ �����������
  - /sections/ui.php           � ������ UI Kit
  - /sections/contacts.php     � ������ ���������
  - /styles/main.css           � ��������� �����
  - /js/main.js                � ������� ��� ���������������
*/

// ����������� ������ ������������ (��������, ��� intro, contacts)
$user = include __DIR__ . '/config/user.php';

// ������� ��� ����������� ������
function section($name) {
    include __DIR__ . "/sections/{$name}.php";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($user['fio']) ?> � UI Kit &amp; ��������</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- �������� ����� -->
    <link rel="stylesheet" href="/styles/main.scss">
    <!-- Favicon -->
    <link rel="icon" href="/favicon.ico">
</head>
<body>
    <?php include __DIR__ . '/partials/header.php'; ?>

    <main>
        <?php
            section('intro');
            section('grid');
            section('typography');
            section('ui');
            section('contacts');
        ?>
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>

    <!-- �������� JS ��� ��������������� (burger, select, accordion, typography-switch � ��.) -->
    <script src="/js/main.js?v=1"></script>
</body>
</html>
