<!DOCTYPE html>
<html lang='ru'>
<head>
<?php include("../../../../../global/head.php"); ?>
<script src='https://cdnjs.cloudflare.com/ajax/libs/lazysizes/4.1.5/lazysizes.min.js' integrity='sha384-kcHbsH7ihpUcc4OyUulJnPvXfoGbjzLc54UiRx5tLl5UE8KuoRRYv7KYQCW6p4eO' crossorigin='anonymous' defer></script>
<title>Рейтинг карт Hearthstone - Dimini Inc.</title>
<meta name='description' content='Информация о текущей полезности карт в Hearthstone'>
<link rel='canonical' href='https://dimini.tk/ru/statistics/games/hearthstone/crafting-guide/'>
<link rel='alternate' hreflang='en' href='https://dimini.tk/en/statistics/games/hearthstone/crafting-guide/'>
<link rel='alternate' hreflang='ru' href='https://dimini.tk/ru/statistics/games/hearthstone/crafting-guide/'>
<meta property='og:title' content='Рейтинг карт Hearthstone - Dimini Inc.'>
<meta property='og:type' content='website'>
<meta property='og:url' content='https://dimini.tk/ru/statistics/games/hearthstone/crafting-guide/'>
<meta property='og:image' content='https://dimini.tk/global/site-files/hearthstone-cards-rating-logo.png'>
<meta property='og:description' content='Информация о текущей полезности карт в Hearthstone'>
</head>
<body>
<?php include("../../../../../global/tagmanager.php"); ?>
<div id='site'>
<?php include("../../../../../ru/notification.php"); ?>
<?php include("../../../../../ru/header.php"); ?>
<div class='hearthstone_craft_guide_content'>
<div id='hearthstone-craft-guide'>
<h2>Рейтинг карт Hearthstone</h2>
<p>
Каждый раз, когда игроки накапливают достаточное количество чародейской пыли, они оказываются перед мучительным выбором того, какую карту создать. Если у игрока уже есть карта на примете или цель создать какую-то определённую колоду, то он уже знает, что создаст следующим, однако, иначе он может оказаться в тупике из-за разнообразия сильных и интересных карт в игре (и относительно малого количества чародейской пыли). Поэтому этот рейтинг призван помочь игрокам лучше понять насколько сильна и популярна та или иная карта в текущей мете и сделать правильный выбор.
</p>
<p>
Для создания данного рейтинга мы использовали информацию с сайта <a href='https://hsreplay.net/cards/'>HSReplay.net</a>, потому что статистика, собранная на этом сайте, наиболее актуальная и полная, уступая лишь внутренней статистике Blizzard, которая не находится в открытом доступе.
</p>
<p>
Данный рейтинг содержит рейтинги карт как Стандартного, так и Вольного режимов, а также общий рейтинг по обоим режимам. Рейтинги карт являются относительными по отношению к рейтингу карт, если бы они все были равны по силе и популярности, таким образом рейтинг 1.00 - рейтинг средней по силе и популярности карты, более низкие рейтинги у плохих карт, которые не стоят того, чтобы создавать их, а более высокие рейтинги у хороших карт и чем выше рейтинг, тем больше смысла создать данную карту в текущей мете. Также в рейтинге указано, сколько копий карты используется в среднем в колодах, содержащих данную карту, что позволит понять нужно ли создавать ещё одну копию или одной будет достаточно.
</p>
<p>Последнее обновление: <?php include("current-date.php"); ?> </p>
<div id='crafting-guide-table' class='display' cellspacing='0' width='100'>
<table id='craftingGuideTable'>
<thead><tr><th>Карта</th><th>Копий</th><th>Общий рейтинг</th><th>Рейтинг Стандарта</th><th>Рейтинг Вольного</th><th>Редкость</th><th>Набор</th><th>Класс</th><th>Коллекция</th></tr></thead><tbody>
<?php include("cards-data.php"); ?>
</tbody></table>
</div>
<p style='color:gray'>Известные проблемы: в связи с механикой карт "Невероятный Чудастер" и "Зейл, Темный Плащ" невозможно правильно оценить их полезность.</p>
<p>
Команды поисковых запросов:
</p><ul>
<li>Название карты</li>
<li>Поисковые критерии в формате "критерий:значение", например "class:mage". Доступные критерии:</li>
<ul>
<li>Редкость. Rarity: FREE, COMMON, RARE, EPIC, LEGENDARY</li>
<li>Набор. Set: CORE, EXPERT1, HOF, NAXX, GVG, BRM, TGT, LOE, OG, KARA, GANGS, UNGORO, ICECROWN, LOOTAPALOOZA, GILNEAS, BOOMSDAY, TROLL, DALARAN, ULDUM, DRAGONS, YEAR_OF_THE_DRAGON, DEMON_HUNTER_INITIATE, BLACK_TEMPLE, SCHOLOMANCE, DARKMOON_FAIRE, DARKMOON_FAIRE_MINI_SET, THE_BARRENS, THE_BARRENS_MINI_SET, STORMWIND, STORMWIND_MINI_SET, ALTERAC_VALLEY, ALTERAC_VALLEY_MINI_SET, THE_SUNKEN_CITY, THE_SUNKEN_CITY_MINI_SET, REVENDRETH, REVENDRETH_MINI_SET, PATH_OF_ARTHAS, RETURN_OF_THE_LICH_KING, RETURN_OF_THE_LICH_KING_MINI_SET, BATTLE_OF_THE_BANDS</li>
<li>Класс. Class: DEATHKNIGHT, DEMONHUNTER, DRUID, HUNTER, MAGE, PALADIN, PRIEST, ROGUE, SHAMAN, WARLOCK, WARRIOR, NEUTRAL</li>
</ul>
<li>Легендарные карты: ★</li>
<li>Карты с недавними или предстоящими изменениями: ⚠</li>
</ul>
<p></p>
<p>
Статистика основана на данных <a href='https://hsreplay.net'>HSReplay.net</a> от <a href='https://hearthsim.info/'>HearthSim</a>.
</p>
</div>
</div>
<?php include("../../../../../ru/share-buttons.php"); ?>
<?php include("../../../../../global/ad-responsive.php"); ?>
<?php include("../../../../../ru/footer.php"); ?>
</div>
</body>
</html>