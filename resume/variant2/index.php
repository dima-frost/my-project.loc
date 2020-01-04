
<t<!DOCTYPE html>

<html>
<head>
    <title>Editor</title>

<style>
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
</style>
    </head>
    <header>
        <form method="get" action="">
            <a class="menu"  href="?mode=edit">Редактирование</a>
            <a class="menu"   href="?mode=view">Просмотр</a>
        </form>
    </header>
<?php
    if ($_GET['mode'] == 'edit') {
        include 'e.php';
    }elseif ($_GET['mode']=='view'){
        include 'r.php';
}
?>
</html>
