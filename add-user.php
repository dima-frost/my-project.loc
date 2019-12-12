<?php
$regions = [
    "Винницкая область",
    "Волынская область",
    "Днепропетровская область",
    "Донецкая область",
    "Житомирская область",
    "Закарпатская область",
    "Запорожская область",
    "Ивано-Франковская область",
    "Киевская область",
    "Кировоградская область",
    "Луганская область",
    "Львовская область",
    "Николаевская область",
    "Одесская область",
    "Полтавская область",
    "Ровненский район",
    "Сумская область",
    "Тернопольская область",
    "Харьковская область",
    "Херсонская область",
    "Хмельницкая область",
    "Черкасская область",
    "Черневецкий район",
    "Черниговская область"
];

function filterInput($input){
    $input = trim($input);
    $input = stripslashes($input);
    $input = strip_tags($input);
    $input = htmlspecialchars($input);
    return $input;
};

function validateString($input, $min=2, $max=32){
    if (empty($input) || strlen($input) < $min || strlen($input) > $max) {
       return false ;
    }else{
        return true;
    }
    };
function validateAdress($input, $min=2, $max=100){
    if (empty($input) || strlen($input) < $min || strlen($input) > $max) {
        return false ;
    }else{
        return true;
    }
};

function validateRegion ($region){
    global $regions;
  if (empty(intval($region)) || !array_key_exists($region, $regions)){
      return false;
  }
  return true;
};
function validateDate($date){
$today = time();
$timestamp= strtotime($date);
$year = date('Y', $today);
if ($year > 1990 || $timestamp){
    return false;
}
return true;
}

if(!empty($_POST)) {
    $user_name = filterInput($_POST["user_name"]);
  $second_name =  filterInput($_POST["second_name"]);
  $city= filterInput($_POST["city"]);
  $address =   filterInput($_POST["address"]);
  $region= filterInput($_POST["region"]);
  $date = $_POST['date'];
};

$errors =[];
if (validateString($user_name)==false){
    $errors['user_name'] = $user_name;
}elseif(validateString($second_name)==false){
    $errors['second_name'] = $second_name;
}elseif (validateString($city)==false){
    $errors['city']= $city;
}elseif (validateAdress($address)==false) {
    $errors['address'] = $address;
}elseif (validateDate($date)==true) {
    $errors['date'] = $date;
}elseif (validateRegion("$region")==false){
    $errors['region'] = $region;
}

?>
<html>
<head>
    <title></title>
    <style>
        .block{
            padding: 100px 0;
            display: flex;
            justify-content: space-between;
            width: 222px;
            margin: 0 auto;
            text-align: center;
            position: center;
        }
        .error{
            border: 1px solid red;
        }
    </style>
</head>
<body>
<div class="block">
   <?php if ($_SERVER['REQUEST_METHOD']=='GET' || !empty($errors)){?>
<form method="post" action="" enctype="application/x-www-form-urlencoded">
    <p>Заполните данные для регистрации</p>
    <label> Имя пользователя:</label>
    <br>
    <input type="text" name="user_name" value="<?php echo $user_name ?>" <?php if(array_key_exists('user_name', $errors ))echo 'class="error"'?>required>
    <br>
    <label>Фамилия пользователя:</label>
    <br>
    <input type="text" name="second_name" value="<?php echo $second_name ?>" <?php if(array_key_exists('second_name', $errors ))echo 'class="error"'?> required>
    <br>
    <label>Область проживания:</label>
    <br>
    <select name="region" >
        <option value="">Выберите со списка</option>
        <?php
        foreach ($regions as $key=>$region):?>
 <!---           echo '<option value="'.$key. '">' . $region . '</option>';--->
            <option value="<?php echo $key ?>" selected><?php echo $region?></option>
        <?php endforeach;?>
    </select>
    <br>
    <label>Город проживания:</label>
    <br>
    <input type="text" name="city" value="<?php echo $city ?>" <?php if(array_key_exists('city', $errors ))echo 'class="error"'?> required>
    <br>
    <label>Адрес проживания:</label>
    <br>
    <input  name="address" value="<?php echo $address?>" <?php if(array_key_exists('address', $errors ))echo 'class="error"'?>required>
    <br>
    <label>Дата рождения:</label>
    <br>
    <input type="date" name="date" value="<?php echo $date ?>"<?php if(array_key_exists('date', $errors ))echo 'class="error"'?> required>
    <br>
    <input type="submit" value="Отправить" >
</form>
    <?php } else{?>
            <h4>Ваш пользователь успешно добавлен в систему</h4>
    <?php } ?>
</body>
</html>
