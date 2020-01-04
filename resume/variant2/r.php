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
        img {
            max-height: 250px;
        }
    </style>
    <?php
    include "function.php";
    $resume=readJson('fjson');
    ?>
</head>
<body>
<div class="wrapper">
    <div class="header">
        <p>
        <h3> <?php
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
