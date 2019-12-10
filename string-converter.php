<html>
<head>
    <meta charset="">
    <title>String converter</title>
</head>
<body>
<p>Данная програма конвертирует строку "Welcome my dear friend!" в зависомости от выбранного режима.
</p>
<ol>
    <li>все символы в верхнем регистре</li>
    <li>все символы в нижнем регистре</li>
    <li>первый символ строки в верхнем регистре, все остальные в нижнем регистре</li>
    <li>первые символы каждого слова в верхнем регистре, все остальные в нижнем регистре</li>
    <li>инвертированый регистр всех символов</li>
</ol>
<p>Выберите режим:
    <form method="post" enctype="application/x-www-form-urlencoded">
    <input type="number" name="mode">
    <input type="submit" value="Применить">
    </form>
</body>
<br>
</html>
<?php
$my_str = "Welcome my dear friend!";
function string_converter($my_string, $mode){
    if ($mode==1){
      echo  strtoupper($my_string);
    }elseif ($mode==2){
      echo  strtolower($my_string);
    }elseif ($mode==3){
        echo  ucfirst($my_string);
    }elseif ($mode==4){
        echo    ucwords($my_string);
    }elseif ($mode==5){
       echo  strtolower($my_string) ^ strtoupper($my_string) ^ $my_string;
    }
    return $my_string;
}
string_converter($my_str, $_POST["mode"]);
?>