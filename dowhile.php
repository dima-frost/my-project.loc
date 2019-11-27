<?php
/*
Объявить переменную $rand и присвоить ей рандомное значение от 1 до 100 (вызов функции rand(1, 100))
Написать алгоритм нахождения суммы чисел от 1 до $rand с помоцью цикла do while. Вывести результат на экран
*/

// Решение задачи

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
</head>
<body>
<h1>Цикл do while</h1>
<p>
   <!--Вариант 1. Формула Гаусса-->
    Сумма чисел от 1 до
    <?php
    $random = rand(1,100);
    echo $random;
    ?>:
    <?php do{
        echo $random*($random+1)/2;
    }while($random==false);
    ?>
    <br>
<p>
    <!--Вариант. 2-->
    Сумма чисел от 1 до
    <?php
    echo $random;
    ?>:
    <?php
    $int=0;
    $sum=0;
    do{
        $sum=$sum+$int;
        $int++;
    }
    while($int<=$random);
    echo $sum;
    ?>
</p>
</body>
</html>
