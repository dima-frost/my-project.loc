
<!DOCTYPE html>

<html>
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
if ($_POST['mode'] === 'day') {
    setcookie('mode', 'day');
} elseif ($_POST['mode'] === 'night') {
    setcookie('mode', 'night');
}
?>
<body class="<?php if (!empty($_COOKIE['mode'])) {
    echo $_COOKIE['mode'];} ?>">
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
    <form action="" method="post">
        <select name="mode">
            <option value="day">Светлая тема</option>
            <option value="night">Темная тема</option>
        </select>
        <input type="submit" value="Применить">
    </form>
</div>
</body>
</html>