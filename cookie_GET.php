
<!DOCTYPE html>
<head>
    <title>cookie</title>
    <style>
        .night {
            background-color: #202020;
            color: #ffffff;
        }
        .day {
            background-color: #ffffff;
            color: #202020;
        }
    </style>

</head>
<?php
if ($_GET['mode'] === 'day') {
    setcookie('mode', 'day');
} elseif ($_GET['mode'] === 'night') {
    setcookie('mode', 'night');
}
?>
<body class="<?php if (!empty($_COOKIE['mode'])) {
    echo$_COOKIE['mode'];}else
        {echo $_GET['mode'] ;} ?>

">
<h1>Основы языка PHP</h1>
<p>
    PHP, расшифровывающийся как "PHP": Hypertext Preprocessor" - «PHP: Препроцессор Гипертекста»,
    является распространенным интерпретируемым языком общего назначения с открытым исходным кодом.
    PHP создавался специально для ведения web-разработок и код на нем может внедряться непосредственно в HTML-код.
    Синтаксис языка берет начало из C, Java и Perl, и является легким для изучения.
    Основной целью PHP является предоставление web-разработчикам возможности быстрого создания динамически генерируемых
    web-страниц, однако область применения PHP не ограничивается только этим.
</p>
<div>
    <p>Выберите тему:</p>
    <form action="" method="get">
        <a href="?mode=day" >День</a>
        <a href="?mode=night" >Ночь</a>
    </form>
</div>
<?php
if ($_GET['mode'] === 'day') {
    setcookie('mode', 'day');
} elseif ($_GET['mode'] === 'night') {
    setcookie('mode', 'night');
}
?>
</body>
</html>