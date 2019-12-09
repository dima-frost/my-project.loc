<html>
<head>
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
$str_top =  strtoupper($my_str);
$str_low = strtolower($my_str);
$str_ucfirst= ucfirst($my_str);
$str_ucwords = ucwords($my_str);
$str_invent = $str_low ^ $str_top ^$my_str;
if($_SERVER['REQUEST_METHOD']=='POST'){
   if ($_POST["mode"]==1 ){
        echo $str_top;
    }elseif ($_POST["mode"]==2){
       echo $str_low;
   }elseif ($_POST["mode"]==3){
       echo $str_ucfirst;
   }elseif ($_POST["mode"]==4){
       echo $str_ucwords;
   }elseif ($_POST["mode"]==5) {
       echo $str_invent;
   };


}
