<?php
// sections/grid.php
// ������ "�����": ������������ ���������� ����� � ��������� ������� �������

/*
    � ���� ����� �����������:
    - ������� ������ ���������� ����� (���������, ����, �������)
    - �������� ��������� ���������� ����� (flex/grid, �����������)
    - ������������ ������������ (������ ������� �������)
    ��� ���������� ����������� main.scss/_grid.scss
*/
?>

<section id="grid" class="section section--grid">
    <div class="section__container">
        <h2 class="section__title">�����</h2>
        <p class="section__subtitle">
            ���������� flex/grid-����� ��� ���������� ����������. ����������� ����������, ���� � ������� ��� ����������� ��������.
        </p>

        <!-- ������ ���������� � ���� -->
        <div class="grid-demo">
            <h3 class="grid-demo__title">��������� � ���</h3>
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-col grid-col--4">.grid-col--4</div>
                    <div class="grid-col grid-col--4">.grid-col--4</div>
                    <div class="grid-col grid-col--4">.grid-col--4</div>
                </div>
            </div>
            <pre class="grid-demo__code">
&lt;div class="grid-container"&gt;
    &lt;div class="grid-row"&gt;
        &lt;div class="grid-col grid-col--4"&gt;.grid-col--4&lt;/div&gt;
        &lt;div class="grid-col grid-col--4"&gt;.grid-col--4&lt;/div&gt;
        &lt;div class="grid-col grid-col--4"&gt;.grid-col--4&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- ������ ���������� ������� -->
        <div class="grid-demo">
            <h3 class="grid-demo__title">���������� �������</h3>
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-col grid-col--6 grid-col--md-12">.grid-col--6 .grid-col--md-12</div>
                    <div class="grid-col grid-col--6 grid-col--md-12">.grid-col--6 .grid-col--md-12</div>
                </div>
            </div>
            <pre class="grid-demo__code">
&lt;div class="grid-container"&gt;
    &lt;div class="grid-row"&gt;
        &lt;div class="grid-col grid-col--6 grid-col--md-12"&gt;.grid-col--6 .grid-col--md-12&lt;/div&gt;
        &lt;div class="grid-col grid-col--6 grid-col--md-12"&gt;.grid-col--6 .grid-col--md-12&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- ������ ��������� ����� -->
        <div class="grid-demo">
            <h3 class="grid-demo__title">��������� ����</h3>
            <div class="grid-container">
                <div class="grid-row">
                    <div class="grid-col grid-col--8">
                        <div class="grid-row">
                            <div class="grid-col grid-col--6">��������� .grid-col--6</div>
                            <div class="grid-col grid-col--6">��������� .grid-col--6</div>
                        </div>
                    </div>
                    <div class="grid-col grid-col--4">.grid-col--4</div>
                </div>
            </div>
            <pre class="grid-demo__code">
&lt;div class="grid-container"&gt;
    &lt;div class="grid-row"&gt;
        &lt;div class="grid-col grid-col--8"&gt;
            &lt;div class="grid-row"&gt;
                &lt;div class="grid-col grid-col--6"&gt;��������� .grid-col--6&lt;/div&gt;
                &lt;div class="grid-col grid-col--6"&gt;��������� .grid-col--6&lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="grid-col grid-col--4"&gt;.grid-col--4&lt;/div&gt;
    &lt;/div&gt;
&lt;/div&gt;
            </pre>
        </div>

        <!-- �������� ������������ -->
        <div class="grid-demo">
            <h3 class="grid-demo__title">����������� � ������������</h3>
            <ul>
                <li><b>.grid-col--12</b> � 100% ������ (1 �������)</li>
                <li><b>.grid-col--6</b> � 50% ������ (2 �������)</li>
                <li><b>.grid-col--4</b> � 33% ������ (3 �������)</li>
                <li><b>.grid-col--md-12</b> � 100% ������ �� ������� ������� (��������� ���������)</li>
                <li>����������� ������������ <b>--md-*</b>, <b>--sm-*</b> ��� ������ ������������</li>
            </ul>
            <pre class="grid-demo__code">
.grid-col--4        // 3 ������� �� ��������
.grid-col--md-12    // 1 ������� �� ��������/������
            </pre>
        </div>
    </div>
</section>

<!-- 
    ������� ��������� �� ������:
    - .section--grid � �������� ��������� ������� �����
    - .grid-demo � ���� ��� ������� ������� (���������, ������, ���)
    - .grid-demo__title � �������� �������
    - .grid-demo__code � ������ HTML-����
    ��� ���������� ����������� main.scss/_grid.scss
-->
