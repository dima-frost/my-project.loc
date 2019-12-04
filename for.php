<?php
/*
С помощью двух циклов for (один вложен в другой) написать алгоритм вывода на экран таблицы умножения
Оформить можно с помощью html элементов table или через кастомный css

Дополнительно. Выделить первый ряд и первую колонку дополнительным цветом

*/

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
    <style>

    </style>
</head>
<body>
<h1>Цикл for</h1>
<table>
    <table border="1">
        <?php
        $cols = 10;
        $rows = 10;
        for($tr=1; $tr<=$rows; $tr++){
            echo "<tr>";
            for($td=1; $td<=$cols; $td++){
                echo "<td>", $tr * $td, "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</table>
</body>
</html>