<?php
$array = [1, 34, 22, 12, 6, 22, 45, 14, 34, 34, 10];
function unicounter($myarray){
$result =  array_unique($myarray);
$counter = count($result);
return $counter;
}
echo "Количество уникальных елементов в масиве = ". unicounter($array);
?>
