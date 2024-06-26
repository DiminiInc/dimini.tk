<!DOCTYPE html>
<html lang="ru">
<head>
<?php include("../../global/head.php"); ?>
<title>Игра "Жизнь" - Dimini Inc.</title>
<meta name="description" content="Клеточный автомат Джона Конвея от Dimini Inc.">
<link rel="canonical" href="https://legacy.dimini.dev/ru/software/game-of-life">
<link rel="alternate" hreflang="en" href="https://legacy.dimini.dev/en/software/game-of-life">
<link rel="alternate" hreflang="ru" href="https://legacy.dimini.dev/ru/software/game-of-life">
<meta property="og:title" content="Игра &#34;Жизнь&#34; - Dimini Inc.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://legacy.dimini.dev/ru/software/game-of-life">
<meta property="og:image" content="https://legacy.dimini.dev/global/site-files/game-of-life-logo.png">
<meta property="og:description" content="Клеточный автомат Джона Конвея от Dimini Inc.">
</head>
<body>
<?php include("../../global/tagmanager.php"); ?>
<div id="site">
<?php include("../../ru/notification.php"); ?>
<?php include("../../ru/header.php"); ?>
<div id="snake_content">
<div id="software-top">
<p>
<img src="/global/site-files/game-of-life-logo.png" id="software-logo" alt="Лого Игры Жизнь">
</p><h1>Игра "Жизнь"(бета) <a href="javascript: void(0)" title="GameOfLife" id="download-button">СКАЧАТЬ</a></h1><br>
<br><br>
<p></p>
</div>
<div id="software-left">
<p>
</p><h4>Описание</h4>
<p>
Игра «Жизнь» — клеточный автомат, придуманный английским математиком Джоном Конвеем в 1970 году.<br>
Место действия этой игры — ограниченное поле, где верхняя граница поля соединена с нижней, а левая граница — с правой, что представляет собой эмуляцию поверхности тора.<br>
Каждая клетка на этой поверхности может находиться в двух состояниях: быть живой или быть мёртвой.<br>
Распределение живых клеток в начале игры называется первым поколением. Каждое следующее поколение рассчитывается на основе предыдущего по таким правилам:
</p><ul>
<li>в мёртвой клетке, рядом с которой ровно три живые клетки, зарождается жизнь</li>
<li>если рядом с живой клеткой находится две или три живые клетки, то эта клетка продолжает жить, иначе клетка умирает</li>
</ul>
Игрок не принимает прямого участия в игре, а лишь расставляет или генерирует начальную конфигурацию живых клеток, которые затем взаимодействуют согласно правилам уже без его участия.
<p></p>
Особенности программы
<ul>
<li>Автоматическое обновление</li>
<li>Настраиваемая скорость симуляции</li>
<li>Возможность выбора цвета клеток при задании начальной конфигурации</li>
<li>Открытый исходный код</li>
</ul>
<p></p>
<p>
</p><h4>Скриншот</h4>
<div id="software-screenshot-carousel">
<div id="software-screenshot">
<a href="javascript:void(0)" onclick="openModal()">
<img src="/ru/site-files/software/game-of-life-screenshot-1.png" id="software-screenshot-image" alt="Скриншот программы">
</a>
</div>
</div>
<p></p>
<p>
</p><h4>История изменений</h4>
<ul id="software-changelog">
<li id="software-last-update">
Версия 0.1.1 (бета)(6 января 2017) <a href="javascript:void(0)" class="show-more">(свернуть)</a>
<ul class="show-more-details">
<li>первый выпуск</li>
</ul>
</li>
</ul>
<p></p>
</div>
<div id="software-right">
<p>
<strong>Загрузок: </strong><?php include("../../global/downloads-data/game-of-life.php"); ?>
</p>
<p>
<strong>Размер: </strong>17.1 КБ
</p>
<p>
<strong>Языки: </strong>Английский
</p>
<p>
<strong>Совместимость: </strong>Windows, Mac OS, Linux, Solaris
</p>
<p>
<strong>Системные требования: </strong>
</p><ul>
<li>Виртуальная машина Java – Java SE Runtime Environment версии не менее, чем 1.8.0_101<br><a style="color:#000" href="http://www.oracle.com/technetwork/java/javase/downloads/jre8-downloads-2133155.html">Скачать с официального сайта</a></li>
<li>Разрешение экрана не менее 1024 x 768 пикселей</li>
</ul>
<p></p>
<p>
<strong>Загрузить для других систем:</strong>
</p><ul>
<li><a href="/global/site-files/GameOfLife/Windows/32/GameOfLife.jar">Windows 32-bit</a></li>
<li><a href="/global/site-files/GameOfLife/Windows/64/GameOfLife.jar">Windows 64-bit</a></li>
<li><a href="/global/site-files/GameOfLife/MacOSX/GameOfLife.jar">macOS</a></li>
<li><a href="/global/site-files/GameOfLife/Linux/GameOfLife.jar">Linux</a></li>
<li><a href="/global/site-files/GameOfLife/SunOS/GameOfLife.jar">Solaris</a></li>
</ul>
<p></p>
<p>
<strong>Исходный код: </strong><a href="https://github.com/DiminiInc/GameOfLife">Github</a>
</p>
<p>
<strong>Возрастные ограничения: </strong>3+
</p>
</div>
</div>
<div id="myModal" class="modal" onclick="closeModal()">
<span class="close">&times;</span>
<div class="modal-content">
<div class="mySlides">
<img src="" id="full-size-image" alt="Скриншот программы">
</div>
</div>
</div>
<?php include("../../ru/share-buttons.php"); ?>
<?php include("../../global/ad-responsive.php"); ?>
<?php include("../../ru/footer.php"); ?>
</div>
</body>
</html>