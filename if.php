
<!DOCTYPE html>

<html>
<head>
    <title>Конструкция if</title>
    <style>
       body.night {
            background-color: #202020;
            color: #ffffff;
        }
       body.day {
            background-color: #ffffff;
            color: #202020;
        }
    </style>

</head>
<?php
$time = date('H');
if ($time < 18 && $time >6 ){$cssClass = "day";}
else{
    $cssClass = "night";}

?>
<body class="<?php echo $cssClass
?>">
<h1>Основы языка PHP</h1>
<p>
    PHP, расшифровывающийся как "PHP": Hypertext Preprocessor" - «PHP: Препроцессор Гипертекста»,
    является распространенным интерпретируемым языком общего назначения с открытым исходным кодом.
    PHP создавался специально для ведения web-разработок и код на нем может внедряться непосредственно в HTML-код.
    Синтаксис языка берет начало из C, Java и Perl, и является легким для изучения.
    Основной целью PHP является предоставление web-разработчикам возможности быстрого создания динамически генерируемых
    web-страниц, однако область применения PHP не ограничивается только этим.
</p>
</body>
</html>