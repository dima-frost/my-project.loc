<!DOCTYPE html>

<html>
<head>
    <title>Основы языка PHP</title>
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
</head>
<body>
<div class="wrapper">
    <div class="header">
        <p>
           <h3> <?php
            $name = "Мороз Дмитрий Александрович";
            echo $name
            ?>
            </h3>
        </p>
        <h4>
            <?php
            $position = "Системный администратор";
            echo $position;
              ?>
        </h4>
    </div>
    <div class="block">
        <div class="float-left">
            <p>Телефон для связи:
            <?php
            $phone = "+380991550947";
            echo $phone;
            ?>
            </p>
            <p>Эл. почта:
                <?php
                $mail = "frostdimonlex@gmail.com";
                echo "<a href='mailto:$mail'>mailto:$mail</a>";
                ?>
                </p>
            <p>Зарплатные ожидания:
                <?php
                $salary = 20000;
                echo $salary;
                ?>
                грн
            </p>
            <p>Возраст:
                <?php
                $age = 26;
                echo $age
                ?>
                лет
            </p>
            <p>Опыт работы:
                <?php
                $experience = 6.5;
                echo $experience;
                ?>
                лет
            </>
            <p>Город проживания:
                <?php
                $curent_city = "Киев";
                echo $curent_city;
                ?>
            </p>
            <p>Готов к переезду:
                <?php
                $relocation = true;
                 if ( $relocation = true)
                echo "Да";
                ?>
                <?php
                $img ="https://goo.su/074T"
                ?>
            </p>
        </div>
        <div class="avatar float-left">
            <img src="<?php echo $img ?>">
        </div>
    </div>
    <div class="block">
        <?php
       echo nl2br(
"Знания и навики:
• Системное администрирование  Windows Server, Ubuntu, CentOS
• Microsoft XP-10, на уровне администратора, MacOS на уровне уверенного пользователя 
• Опыт работы с  Jira, GIT, ActiveDirectory
• Знание гибких методологий разработки, SDLC
• Знание архитектуры ПК, навыки диагностики и ремонта.
• Принцип построения лвс и работы сетевого оборудования, практические навыки настройки оборудования и монтаж сетей.
• Настройка и понимание принципов работы  TCP/IP, DNS,  VPN, DHCP, Proxy, NAT
• Навыки настройки почтового сервера(Postfix, Dovecot), FTP сервера, файлового сервера Samba, система резервного копирования BackupPC, построение программного RAID
• Опыт работы с  система мониторинга Nagios и сервером cбора логов LogAnalizer
• Системы виртуализации Hyper-V, VMware
• Знание основ веб-разработки, основы HTML и CSS, опыт работы с CMS Joomla, Magento, OpenCart.
• Знание основ SQL, MySQL")
?>
    </div>
</div>
</body>
</html>