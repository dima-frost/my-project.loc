<?php
$countries = "Украина, Польща, Австрия, Венгрия, Грузия, Германия, Норвегия, Англия";
function countries($str, $del){
  $countries_array =  explode(",", $str);
 sort($countries_array, SORT_STRING);
    echo  implode("$del", $countries_array);
};
countries($countries, "<br>");
?>
