<!DOCTYPE html>

<html>
<head>
    <title>Resume</title>
    <style>
        .wrapper {
            width: 740px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
        }
        .block {
            border-top: 1px solid #333333;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
        }

        .avatar {
            text-align: right;
            max-height: 60px;
        }
        .menu {
            margin: 0;
            background-color: #101010;
            border-color: black;
            min-height: 64px;
            text-decoration: none;
            padding: 0;
            float: left;
            width: 140px;
            display: block;
            color: #9d9d9d;
            line-height: 4em;
            font-weight: bolt;
            text-align: center;
        }
        .menu:hover {
            color: yellowgreen;
            background-color: #202020;
        }
        img {
            max-height: 250px;
        }
    </style>
    <?php
    function readJson($file) {
        $f = fopen($file, 'r');

        $json = fgets($f);

        $array = json_decode($json, true);
        return $array;

    }

    ?>
</head>
<header>
    <form method="get" action="">
        <a class="menu" href="editor.php">Редактирование</a>
        <a class="menu" href="">Просмотр</a>
    </form>
</header>
<body>
<div class="wrapper">
    <div class="header">
        <p>
           <h3> <?php
            $resume=readJson('fjson');
            echo $resume['name'];
            ?>
            </h3>
        </p>
        <h4>
            <?php
            echo $resume['position'];
              ?>
        </h4>
    </div>
    <div class="block">
        <div class="float-left">
            <p>Телефон для связи:
            <?php
            echo $resume['phone'];
            ?>
            </p>
            <p>Эл. почта:
                <?php
                $mail = $resume['mail'];
                echo "<a href='mailto:$mail'>$mail</a>";
                ?>
                </p>
            <p>Зарплатные ожидания:
                <?php
                echo $resume['salary'];
                ?>
                грн
            </p>
            <p>Возраст:
                <?php
                echo $resume['age'];
                ?>
                лет
            </p>
            <p>Опыт работы:
                <?php
                echo $resume['experience'];
                ?>
                лет
            </>
            <p>Город проживания:
                <?php
                echo $resume['current_city'];
                ?>
            </p>
            <p>Готов к переезду:
                <?php
                $relocation = $resume['relocation'];
                 if ( $relocation == true){
                echo "Да";
                 } elseif ($relocation == false){
                     echo "Нет";
                 }
                ?>
            </p>
        </div>
        <div class="avatar">
            <img src="./images/<?php echo $resume['photo'] ?>">
        </div>
    </div>
    <div class="block">
        <?php
       echo nl2br($resume['about'])
?>
    </div>
</div>
</body>
</html>
