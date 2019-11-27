<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
</head>
<body>
<h1>Типы данных</h1>
<div>
    <?php
    $var = 26;
    echo "Мой возраст: $var";
    ?>
    <br>
    <?php
    $var_type = gettype($var);
    echo "Переменная типа: $var_type";
    ?>
    <br>
    <?php
    $var = "Dmitriy";
    echo "Моё имя: $var";
    ?>
    <br>
    <?php
    $var_type = gettype($var);
    echo "Переменная типа: $var_type";
    ?>
</div>
</body>
</html>
