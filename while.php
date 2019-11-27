<?php
/*
Объявить переменную $rand и присвоить ей рандомное значение от 0 до 100 (вызов функции rand(0, 100))
Написать цикл while который выводит все числа от 0 до $rand. Каждое число должно быть в отдельной строке (перенос в html)
*/

?>

<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
</head>
<body>
<h1>Циклы while</h1>
<p>
    <?php
    $rand=rand(0,100);
    echo $rand;
     ?>
    <br>
    <?php
    $i=0;
    while($i<$rand){
        echo "$i <br>";
        $i++;}
    ?>

</p>
</body>
</html>