<html><head></head><body><h1>Тестовое задание</h1>

<p>Задание состоит из трёх частей:</p>

<ol>
<li>Скачивание и разбор данных в виде JSON при помощи PHP. Генерация html-страницы.</li>
<li>Разработка одностраничного веб-интерфейса на основе данных из первого пункта (дизайн предоставляется)</li>
<li>Адаптация интерфейса для нескольких разрешений экрана.</li>
</ol>

<h2>Задача</h2>

<p>Дан url, с которого получается список тарифов в формате json.
На основе этих данных надо сделать страницу - интерфейс выбора тарифа.</p>

<p>Интерфес состоит из трёх экранов и должен быть реализован без перезагрузки страницы.
На первом экране выводятся группы тарифов.
На втором экране выводятся варанты тарифов, выбранной группы.
На третьем все параметры выбранного тарифа.</p>

<h2>PHP</h2>

<ol>
    <li>Версия PHP &gt;= 7.1</li>
    <li>Код не должен быть завязан на специфический web-сервер</li>
    <li>Код не должен быть завязан на расположение на сервере (корневой каталог или нет, и там и там должно работать. То же относится к html и css)
</li></ol>

<h2>JSON данные</h2>

<ol>
<li>Представляют собой список тарифов объединённых в группы</li>
<li>Находятся по адресу <a href="http://sknt.ru/job/frontend/data.json">http://sknt.ru/job/frontend/data.json</a>
В готовой программе должны скачиваться с этого адреса.</li>
<li><code>new_payday</code> - дата в формате timestamp+timezone_offset</li>
</ol>

<h2>Дизайн</h2>

<ol>
<li>Предоставлена версия для мобильного телефона (ширина до 640px)
<ul>
<li><a href="./1.png">Первый экран</a></li>
<li><a href="./2.png">Второй экран</a></li>
<li><a href="./3.png">Третий экран</a></li>
</ul></li>
<li>Для планшета тарифы вывести в две колонки (ширина от 640px до 1023px)</li>
<li>Для большого экрана в три колонки (ширина от 1024px)</li>
</ol>

<h2>Дополнительные требования</h2>

<ol>
    <li>Готовое задание не должно требовать от проверяющего скачивания фреймворков, сборки скриптов или чего-то подобного</li>
    <li>Все необходимые для работы файлы должны присутствовать в присланном архиве или репозитории</li>
    <li>Скрипты и стили не должны быть минифицированными/обфусцированными</li>
</ol>

</body></html>
