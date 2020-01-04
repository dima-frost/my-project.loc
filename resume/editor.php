<!DOCTYPE html>
<html>
<head>
    <title>Editor</title>
    <style>
        .wrapper {
            width: 740px;
            margin: 0 auto;
            height: 950px;
        }

       .block {
            border-top: 1px solid #333333;
           border-bottom: 1px solid #333333;
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
           float: left;
        }
        .about {
            padding: 20px 0;
            width: 680px;
            display: flex;
            justify-content: space-between;
            float: left;
        }
        .upAvatar {
            border: 1px dotted #202020 ;
            text-align: right;
            max-height: 200px;
        }
        .h_avatar{
            font-size: small;
            text-align: left;
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
            max-height: 100px;
        }
    </style>
    <?php
    if (empty($_FILES['photo'])) {
        $photo = $resume['photo'];
    } elseif (!empty($_FILES['photo'])){
        $photo = $_FILES['photo']['name'];
    };

?>

    <?php
include 'function.php';
    $json_resume=[
        'name'=>filterInput($_POST['name']),
        'position'=>filterInput($_POST['position']),
        'phone'=>filterInput($_POST['phone']),
        'mail'=>filterInput($_POST['mail']),
        'salary'=>filterInput($_POST['salary']),
        'age'=>filterInput($_POST['age']),
        'experience'=>filterInput($_POST['experience']),
        'current_city'=>filterInput($_POST['current_city']),
        'relocation'=>filterInput($_POST['relocation']),
        'photo'=> $photo,
        'about'=>filterInput($_POST['about'])
    ];
    ?>

</head>
<header>
    <form method="get" action="">
        <a class="menu" href="?id=edit">Редактирование</a>
        <a class="menu" href="resume.php">Просмотр</a>
    </form>
</header>
<body>
<div>
    <?php
    if ($_SERVER['REQUEST_METHOD']=='GET' || $_GET['id']=='edit'){
    $resume = readJson('fjson');
    ?>
    <div class="wrapper">
        <div class="header">

        <form id="edit" method="post" action="" enctype="multipart/form-data" >
        <h3>
            <input type="text" name="name" placeholder="ФИО" value="<?php echo $resume['name']?>">
        </h3>
        <h4>
          <input type="text" name="position" placeholder="Желаемая вакансия"  value="<?php echo $resume['position']?>">
        </h4>
        </div>
         <div class="block">
            <div class="float-left">
            <p>Телефон для связи:
               <input type="text" name="phone" placeholder="+380(XX)XXX-XX-XX" size="10"  value="<?php echo $resume['phone']?>">
            </p>
            <p>Эл. почта:
                <input type="text" name="mail"  value="<?php echo $resume['mail']?>">
            </p>
            <p>Зарплатные ожидания:
                <input  type="text" name="salary" size="8"  value="<?php echo $resume['salary']?>">
                грн
            </p>
            <p>Возраст:
                <input  type="text" name="age" size="5"  value="<?php echo $resume['age']?>">
                лет
            </p>
            <p>Опыт работы:
                <input  type="text" name="experience" size="5"  value="<?php echo $resume['experience']?>">
                лет
            </p>
            <p>Город проживания:
                <input  type="text" name="current_city"  value="<?php echo $resume['current_city']?>">
            </p>
                <lable> Готов к переезду:</lable>

                    <input  type="checkbox" name="relocation" value="да"> да
                    <input  type="checkbox" name="relocation" value="нет">нет
                </p>


         </div>
        <div class="upAvatar">
                <p class="h_avatar">Загрузите ваше фото:</p>
            <input  type="file" name="photo" value="<?php echo $resume['photo']?>" >
<!--             <input formaction="" formmethod="post" formenctype="multipart/form-data" type="submit" value="Загрузить"-->
          <img src="./images/<?php echo $resume['photo']?>" >
        </div>
         </div>
    <div class="about">
        <p>О себе:</p>
        <br>
        <textarea form="edit" name="about" rows="15" cols="80"  > <?php echo $resume['about']?> </textarea>
    </div>
        <div>
        <input  name="save" type="submit" value="Сохранить резюме">
    </form>
        </div>
        <?php ;}?>
        <?php
        function saveJson($file, $array) {
            $json = json_encode($array, JSON_UNESCAPED_UNICODE);

            $f = fopen($file, 'w');

            fwrite($f, $json);

            fclose($f);
        };
        function readJson($file) {
            $f = fopen($file, 'r');

            $json = fgets($f);

            $array = json_decode($json, true);
            return $array;

        }

        ?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_FILES["photo"])) {
    $fileName = $_SERVER["DOCUMENT_ROOT"] . "/resume/images/". $_FILES['photo']['name'];
    if (move_uploaded_file($_FILES["photo"]["tmp_name"], $fileName)) {
        echo "Файл " . $_FILES["photo"]["name"] . " успешно загружен";
    }
}
?>
       <?php if (isset($_POST['save'])){
           saveJson('fjson', $json_resume);
           echo "Ваш файл успешно сохранен!";
       }
  ?>
    </div>
</body>
</html>