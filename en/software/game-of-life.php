<!DOCTYPE html>
<html lang="en">
<head>
<?php include("../../global/head.php"); ?>
<title>Game Of Life - Dimini Inc.</title>
<meta name="description" content="John Conways' cellular automaton from Dimini Inc.">
<link rel="canonical" href="https://legacy.dimini.dev/en/software/game-of-life">
<link rel="alternate" hreflang="en" href="https://legacy.dimini.dev/en/software/game-of-life">
<link rel="alternate" hreflang="ru" href="https://legacy.dimini.dev/ru/software/game-of-life">
<meta property="og:title" content="Game Of Life - Dimini Inc.">
<meta property="og:type" content="website">
<meta property="og:url" content="https://legacy.dimini.dev/en/software/game-of-life">
<meta property="og:image" content="https://legacy.dimini.dev/global/site-files/game-of-life-logo.png">
<meta property="og:description" content="John Conways' cellular automaton from Dimini Inc.">
</head>
<body>
<?php include("../../global/tagmanager.php"); ?>
<div id="site">
<?php include("../../en/notification.php"); ?>
<?php include("../../en/header.php"); ?>
<div id="snake_content">
<div id="software-top">
<p>
<img src="/global/site-files/game-of-life-logo.png" id="software-logo" alt="Game of Life logo">
</p><h1>Game of Life (beta) <a href="javascript: void(0)" title="GameOfLife" id="download-button">DOWNLOAD</a></h1><br>
<br><br>
<p></p>
</div>
<div id="software-left">
<p>
</p><h4>Description</h4>
<p>
The Game of Life is a cellular automaton devised by the British mathematician John Horton Conway in 1970.<br>
The universe of the Game of Life is an two-dimensional orthogonal grid, where top side is connected to bottom side and left side is connected to right side, of square cells, each of which is in one of two possible states, alive or dead. Every cell interacts with its eight neighbours, which are the cells that are horizontally, vertically, or diagonally adjacent. At each step in time, the following transitions occur:
</p><ul>
<li>Any live cell with fewer than two live neighbours dies</li>
<li>Any live cell with two or three live neighbours lives</li>
<li>Any live cell with more than three live neighbours dies</li>
<li>Any dead cell with exactly three live neighbours becomes a live cell</li>
</ul>
The initial pattern constitutes the seed of the system. The first generation is created by applying the above rules simultaneously to every cell in the seed—births and deaths occur simultaneously. The rules continue to be applied repeatedly to create further generations.
<p></p>
Features
<ul>
<li>Autoupdate</li>
<li>English interface</li>
<li>Adjustable simulation speed</li>
<li>Adjustable cell colors</li>
<li>Open-source</li>
</ul>
<p></p>
<p>
</p><h4>Screenshot</h4>
<div id="software-screenshot-carousel">
<div id="software-screenshot">
<a href="javascript:void(0)" onclick="openModal()">
<img src="/en/site-files/software/game-of-life-screenshot-1.png" id="software-screenshot-image" alt="Software screenshot">
</a>
</div>
</div>
<p></p>
<p>
</p><h4>Changelog</h4>
<ul id="software-changelog">
<li id="software-last-update">
Version 0.1.1 (beta) (January 6, 2017) <a href="javascript:void(0)" class="show-more">(show&nbsp;less)</a>
<ul class="show-more-details">
<li>initial release</li>
</ul>
</li>
</ul>
<p></p>
</div>
<div id="software-right">
<p>
<strong>Downloads: </strong><?php include("../../global/downloads-data/game-of-life.php"); ?>
</p>
<p>
<strong>Size: </strong>17.1 KB
</p>
<p>
<strong>Languages: </strong>English
</p>
<p>
<strong>Compatibility: </strong>Windows, Mac OS, Linux, Solaris
</p>
<p>
<strong>System requirements: </strong>
</p><ul>
<li>Java SE Runtime Environment version 1.8.0_101 or better.<br><a style="color:#000" href="http://www.oracle.com/technetwork/java/javase/downloads/jre8-downloads-2133155.html">Download from official site</a></li>
<li>1024 x 768 minimum display resolution</li>
</ul>
<p></p>
<p>
<strong>Download for other platforms:</strong>
</p><ul>
<li><a href="/global/site-files/GameOfLife/Windows/32/GameOfLife.jar">Windows 32-bit</a></li>
<li><a href="/global/site-files/GameOfLife/Windows/64/GameOfLife.jar">Windows 64-bit</a></li>
<li><a href="/global/site-files/GameOfLife/MacOSX/GameOfLife.jar">macOS</a></li>
<li><a href="/global/site-files/GameOfLife/Linux/GameOfLife.jar">Linux</a></li>
<li><a href="/global/site-files/GameOfLife/SunOS/GameOfLife.jar">Solaris</a></li>
</ul>
<p></p>
<p>
<strong>Source code: </strong><a href="https://github.com/DiminiInc/GameOfLife">Github</a>
</p>
<p>
<strong>Age restrictions: </strong>3+
</p>
</div>
</div>
<div id="myModal" class="modal" onclick="closeModal()">
<span class="close">&times;</span>
<div class="modal-content">
<div class="mySlides">
<img src="" id="full-size-image" alt="Software screenshot">
</div>
</div>
</div>
<?php include("../../en/share-buttons.php"); ?>
<?php include("../../global/ad-responsive.php"); ?>
<?php include("../../en/footer.php"); ?>
</div>
</body>
</html>