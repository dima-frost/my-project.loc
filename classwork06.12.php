<?php

?>
<html>
<head>
    <title></title>
</head>
<body>
<div>

</div>
<?php
$users = [
    "qwert@gmail.com" => "123",
    "qwerty@gmail.com" => "1234",
    "qwertyu@gmail.com" => "12345"
];
if($_SERVER['REQUEST_METHOD']=='POST'){
    $inputLogin = $_POST['user_login'];
    $inputPassword = $_POST['user_password'];
    if (array_key_exists($inputLogin, $users) && $users[$inputLogin] === $inputPassword){
        echo 'Login accept';
    }else {
        echo 'Error';
    }

}
?>
<form method="post" action="" enctype="application/x-www-form-urlencoded">
    <label> Email</label>
    <br>
    <input placeholder="email" name="user_login">
    <br>
    <label>Пароль</label>
    <br>
    <input type="password" placeholder="password" name="user_password" >
    <br>

    </select>
    <br><br>
    <input type="submit" >




</form>
</body>
</html>
