<!DOCTYPE html>

<html>
<head>
    <?php
    define('SITE_NAME', "Основы синтаксиса");
    ?>
    <title>
        <?php
        echo SITE_NAME;
            ?>
    </title>
    <?php
    const LESSON_NAME = "Переменные и константы";
    ?>
</head>
<body>
    <h1>
        <?php
        echo LESSON_NAME;
        ?>
     </h1>
    <p>Привет,
        <?php
        $userName = "Dmitriy";
        echo  $userName;
        ?>
    </p>
</body>
</html>