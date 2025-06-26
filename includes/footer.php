<?php
// includes/footer.php
// ������ ���������� (footer) �����. ��������� �� ���� ���������.

/*
    � ���� ����� ������ ���������:
    - �������� � ���
    - ���������� ���������� (�����, �������)
    - ������ �� ���������� ���� (���� ����)
    - ����� �������������� ���������� �� ������
    - ����������� JS-�������� (���� ���������)
    ������ ������������ ����� ���������� �� config/user.php
*/

// ���������� ������ ������������ ��� ������ ��������� � ������
$user = include __DIR__ . '/../config/user.php';
?>

<footer class="site-footer">
    <div class="site-footer__container">
        <!-- �������� � ��� ������������ -->
        <div class="site-footer__copyright">
            &copy; <?= date('Y') ?> <?= htmlspecialchars($user['fio']) ?>.
            ��� ����� ��������.
        </div>

        <!-- ���������� ���������� -->
        <div class="site-footer__contacts">
            <span class="site-footer__contact">
                Email: <a href="mailto:<?= htmlspecialchars($user['contacts']['email']) ?>">
                    <?= htmlspecialchars($user['contacts']['email']) ?>
                </a>
            </span>
            <span class="site-footer__contact">
                �������: <a href="tel:<?= htmlspecialchars($user['contacts']['phone']) ?>">
                    <?= htmlspecialchars($user['contacts']['phone']) ?>
                </a>
            </span>
            <?php if (!empty($user['contacts']['telegram'])): ?>
                <span class="site-footer__contact">
                    Telegram: <a href="https://t.me/<?= ltrim(htmlspecialchars($user['contacts']['telegram']), '@') ?>" target="_blank">
                        <?= htmlspecialchars($user['contacts']['telegram']) ?>
                    </a>
                </span>
            <?php endif; ?>
        </div>

        <!-- ���������� ���� ��� �������������� ������ (���� ����) -->
        <!--
        <div class="site-footer__socials">
            <a href="#" class="site-footer__social-link">VK</a>
            <a href="#" class="site-footer__social-link">GitHub</a>
        </div>
        -->

    </div>
</footer>

<!-- 
    ����������� �� ���������:
    - .site-footer � �������� ��������� ������
    - .site-footer__container � ������� ��� �������� ������ (��� ������������� � ��������)
    - .site-footer__copyright � �������� � ����� � ���
    - .site-footer__contacts � ���� � ���������� �����������
    - .site-footer__contact � ��������� ������� (email, �������, telegram)
    - .site-footer__socials � (�����������) ���� ��� ������ �� �������
    ��� ���������� ������������ main.scss/_footer.scss
-->
