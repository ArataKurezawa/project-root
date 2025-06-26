<?php
// index.php
// √лавна€ точка входа дл€ сайта. ѕодключает все основные секции и partials.

/*
  ѕредполагаетс€ структура:
  - /config/user.php           Ч данные пользовател€ (‘»ќ, контакты и др.)
  - /partials/header.php       Ч шапка сайта
  - /partials/footer.php       Ч футер сайта
  - /sections/intro.php        Ч вводна€ секци€
  - /sections/grid.php         Ч секци€ сетки
  - /sections/typography.php   Ч секци€ типографики
  - /sections/ui.php           Ч секци€ UI Kit
  - /sections/contacts.php     Ч секци€ контактов
  - /styles/main.css           Ч собранные стили
  - /js/main.js                Ч скрипты дл€ интерактивности
*/

// ѕодключение данных пользовател€ (например, дл€ intro, contacts)
$user = include __DIR__ . '/config/user.php';

// ‘ункци€ дл€ подключени€ секций
function section($name) {
    include __DIR__ . "/sections/{$name}.php";
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title><?= htmlspecialchars($user['fio']) ?> Ч UI Kit &amp; “естовое</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ќсновные стили -->
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

    <!-- ќсновной JS дл€ интерактивности (burger, select, accordion, typography-switch и др.) -->
    <script src="/js/main.js?v=1"></script>
</body>
</html>
