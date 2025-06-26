<?php
// sections/intro.php
// ������� ������ �����. ��� �������, ��� ������ ����� � ������� ����������� � �������, ������ � ���������� �����.

/*
    � ���� ����� �����������:
    - �����������, ������� �������� �������/���������/��������� �������
    - �������� ���������� � ������������ (���, ���������, �������� �� config/user.php)
    - ������ ��� �������� � �������� �������� (UI Kit, �������� � ��.)
    - ����� �������� �����������, ������� ��� ����
    ��� ���������� ����������� main.scss/_intro.scss
*/

// ���������� ������ ������������
$user = include __DIR__ . '/../config/user.php';
?>

<section id="intro" class="section section--intro">
    <div class="section__container">
        <div class="intro">
            <div class="intro__content">
                <h1 class="intro__title">
                    ������! ���� ����� <?= htmlspecialchars($user['fio']) ?>
                </h1>
                <p class="intro__subtitle">
                    <?= htmlspecialchars($user['position']) ?> <br>
                    <?= htmlspecialchars($user['about'] ?? '����� ���������� �� ��� ����-���������! ����� �� ������� ������� UI-�����������, ����������� � ���������� ����������.') ?>
                </p>
                <div class="intro__contacts">
                    <a href="mailto:<?= htmlspecialchars($user['contacts']['email']) ?>" class="intro__contact-link">
                        <?= htmlspecialchars($user['contacts']['email']) ?>
                    </a>
                    <a href="tel:<?= htmlspecialchars($user['contacts']['phone']) ?>" class="intro__contact-link">
                        <?= htmlspecialchars($user['contacts']['phone']) ?>
                    </a>
                    <?php if (!empty($user['contacts']['telegram'])): ?>
                        <a href="https://t.me/<?= ltrim(htmlspecialchars($user['contacts']['telegram']), '@') ?>" class="intro__contact-link" target="_blank">
                            <?= htmlspecialchars($user['contacts']['telegram']) ?>
                        </a>
                    <?php endif; ?>
                </div>
                <div class="intro__actions">
                    <a href="#ui" class="ui-button intro__button">UI Kit</a>
                    <a href="#contacts" class="ui-button intro__button ui-button--secondary">��������</a>
                </div>
            </div>
            <!-- ����� �������� ����/����������� -->
            <!-- <div class="intro__image">
                <img src="/images/avatar.jpg" alt="���� ������������">
            </div> -->
        </div>
    </div>
</section>

<!-- 
    ������� ��������� �� ������:
    - .section--intro � �������� ��������� ������� ������
    - .intro__title � ������� ��������� � ���
    - .intro__subtitle � ������� ��������/�������
    - .intro__contacts � �������� (email, �������, telegram)
    - .intro__actions � ������ �������� � ��������
    - .intro__image � ���� ��� ����������� (�����������)
    ��� ���������� ����������� main.scss/_intro.scss
-->
