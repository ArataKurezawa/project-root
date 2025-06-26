<?php
// sections/typography.php
// ������ "�����������": ������������ ���� ��������������� ������ �������

/*
    � ���� ����� �����������:
    - ������� ���� ������� � ��������� ��������� ������: ���������, ���������, ������, ������, ������, ���, ������� � �.�.
    - ��� ������� ����: ���������, ������� ��������, ������ �������������, ��������� HTML
    - ����� �������� ������������� ������������� ����������� (�������, �������, �����������)
    ��� ���������� ����������� main.scss/_typography.scss
*/
?>

<section id="typography" class="section section--typography">
    <div class="section__container">
        <h2 class="section__title">�����������</h2>
        <p class="section__subtitle">�������� ��������� ����� � �������� ����������</p>

        <!-- ������������� ����������� (���� �����, ��� ������������) -->
        <div class="typography-switch">
            <button data-typography="default" class="typography-switch__button">�������</button>
            <button data-typography="large" class="typography-switch__button">�������</button>
            <button data-typography="contrast" class="typography-switch__button">�����������</button>
        </div>

        <!-- ��������� -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">���������</h3>
            <h1>��������� H1</h1>
            <h2>��������� H2</h2>
            <h3>��������� H3</h3>
            <h4>��������� H4</h4>
            <h5>��������� H5</h5>
            <h6>��������� H6</h6>
            <pre class="typography-demo__code">
&lt;h1&gt;��������� H1&lt;/h1&gt;
&lt;h2&gt;��������� H2&lt;/h2&gt;
&lt;h3&gt;��������� H3&lt;/h3&gt;
&lt;h4&gt;��������� H4&lt;/h4&gt;
&lt;h5&gt;��������� H5&lt;/h5&gt;
&lt;h6&gt;��������� H6&lt;/h6&gt;
            </pre>
        </div>

        <!-- ������� ����� � ��������� -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">���������</h3>
            <p>��� ������� ����� ������. ������������ ��� ��������� �������� ��������. ������ � ����������� �������� �������� � ������������ � ������-������.</p>
            <p><b>������ �����</b>, <i>������</i>, <u>������������</u>, <mark>����������</mark>, <span style="color: #1976d2;">�������</span>.</p>
            <pre class="typography-demo__code">
&lt;p&gt;��� ������� ����� ������.&lt;/p&gt;
&lt;b&gt;������ �����&lt;/b&gt;, &lt;i&gt;������&lt;/i&gt;, &lt;u&gt;������������&lt;/u&gt;, &lt;mark&gt;����������&lt;/mark&gt;
            </pre>
        </div>

        <!-- ������ -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">������</h3>
            <ul>
                <li>������� �������������� ������</li>
                <li>��� ���� �������</li>
            </ul>
            <ol>
                <li>������ �������</li>
                <li>������ �������</li>
            </ol>
            <pre class="typography-demo__code">
&lt;ul&gt;
    &lt;li&gt;������� �������������� ������&lt;/li&gt;
&lt;/ul&gt;
&lt;ol&gt;
    &lt;li&gt;������ �������&lt;/li&gt;
&lt;/ol&gt;
            </pre>
        </div>

        <!-- ������ -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">������</h3>
            <a href="#">������� ������</a>
            <a href="#" class="link--primary">�������� ������</a>
            <a href="#" class="link--secondary">�������������� ������</a>
            <pre class="typography-demo__code">
&lt;a href="#"&gt;������� ������&lt;/a&gt;
&lt;a href="#" class="link--primary"&gt;�������� ������&lt;/a&gt;
            </pre>
        </div>

        <!-- ������ -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">������</h3>
            <blockquote>
                ��� ������ ������. ���������� ������� �� ������-�����.
            </blockquote>
            <pre class="typography-demo__code">
&lt;blockquote&gt;
    ��� ������ ������.
&lt;/blockquote&gt;
            </pre>
        </div>

        <!-- ��� -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">���</h3>
            <code>const x = 42;</code>
            <pre>
function hello() {
    console.log("Hello, world!");
}
            </pre>
            <pre class="typography-demo__code">
&lt;code&gt;const x = 42;&lt;/code&gt;
&lt;pre&gt;
function hello() {
    console.log("Hello, world!");
}
&lt;/pre&gt;
            </pre>
        </div>

        <!-- ������� -->
        <div class="typography-demo">
            <h3 class="typography-demo__title">�������</h3>
            <table>
                <thead>
                    <tr>
                        <th>���������</th>
                        <th>��������</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>������ 1</td>
                        <td>������ 2</td>
                    </tr>
                    <tr>
                        <td>������ 3</td>
                        <td>������ 4</td>
                    </tr>
                </tbody>
            </table>
            <pre class="typography-demo__code">
&lt;table&gt;
    &lt;thead&gt;
        &lt;tr&gt;
            &lt;th&gt;���������&lt;/th&gt;
            &lt;th&gt;��������&lt;/th&gt;
        &lt;/tr&gt;
    &lt;/thead&gt;
    &lt;tbody&gt;
        &lt;tr&gt;
            &lt;td&gt;������ 1&lt;/td&gt;
            &lt;td&gt;������ 2&lt;/td&gt;
        &lt;/tr&gt;
    &lt;/tbody&gt;
&lt;/table&gt;
            </pre>
        </div>
    </div>
</section>

<!-- 
    ������� ��������� �� ������:
    - .section--typography � �������� ��������� ������� �����������
    - .typography-demo � ���� ��� ������� ���� ������ (���������, ������, ���)
    - .typography-demo__title � �������� �����
    - .typography-demo__code � ������ HTML-����
    ��� ���������� ����������� main.scss/_typography.scss
    ��� ��������������� � TypographySwitch.js
-->
