<html>
<head>
    <title>Page</title>
    <meta charset="UTF-8">
    <style>
        body {
            font-size: 100%;
        }
        ul {
            margin: 0;
            padding: 0;
        }
        ul li {
            list-style-type: none;
        }
        .m {
            text-decoration: none;
        }
        .conteiner{
            margin: 0 auto;
            width: 960px;
        }
        .header{
            padding: 50px;
            background-color: darkcyan;
        }
        .header h1, h3 {
            color: darkred;
            text-align: center;
        }
        .menu_form {
            margin:0;
        }
        .menu {
            margin: 0;
            background-color: #101010;
            border-color: black;
            min-height: 64px;
        }
        .menu li {
            float: left;
            width: 100px;
        }
         .m {
            display: block;
            color: #9d9d9d;
            line-height: 4em;
            font-weight: bolt;
            text-align: center;
        }
         .m:hover {
            color: yellowgreen;
            background-color: #202020;
        }
         .m:active{
             color: yellowgreen;
             background-color: #202020;
         }
        .content_box{
            margin: 0;
            min-height: 500px;
            background-color: cyan;
        }
        .content{
            padding: 30px;
            font-size: 14pt;
            margin: 0 auto;
            text-align: justify;
            white-space: normal;
        }
        .footer {
            margin: 0;
            min-height: 100px;
            background-color: #101010;
        }
        .signature{
            color: white;
            text-align: center;
            padding-top: 70px;
            font-size: small;
            margin: 0;
        }
        img {
            padding: 20px;
            position: center;
        }

    </style>
</head>
<body>
<header class="header">
    <div class="conteiner">
        <!---HEADER--->
        <h1>Aurum Group</h1>
        <h3>Провідна українська багатопрофільна промислово-інвестиційна група </h3>
        <!---HEADER--->
    </div>
</header>
<nav class="menu">
    <!---MENU--->
    <div class="conteiner">
        <?php
        require_once "contents/menu.php"
        ?>
    </div>
    <!---MENU--->
</nav>
<div class="content_box">
    <div class="content">
        <?php
        if ($_SERVER['REQUEST_METHOD']=='GET'){
            if ($_GET['id']=== "o_nas"){
                include "contents/o_nas.php";
            }elseif ($_GET['id']=== "contacts"){
                include "contents/contacts.php";
            }else include "contents/main.php";

    }
        ?>
    </div>
</div>
</body>
<footer>
    <div class="footer">
        <p class="signature">Created by Frost</p>
    </div>
</footer>
</html>