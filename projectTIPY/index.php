<!--
    головной файл проекта
    здесь располагается вся базовая информация и дерево карт
-->
<?php 

session_start();
$_SESSION['path'] = "https://localhost/project";

?> 
<!DOCTYPE html>
<html>
    <head>
        <link href="includes/styles.css" rel="stylesheet">
        <meta charset="utf-8">
    </head>
    <body class="textStyle">
        <header class="main">
            <h1>Онлайн-академия IT</h1><hr>
        </header>
        
<?php 

require("db/dbUsersDriver.php");

if (empty($_POST['isEnter']) && empty($_SESSION['login'])){
    require("indexSourses/indexAside.html");
} else {
    if (!empty($_POST['login'])){
        $_SESSION['login'] = $_POST['login'];
        $_SESSION['paswd'] = $_POST['paswd'];
    }
    $log = $_SESSION['login'];
    $pas = $_SESSION['paswd'];
    $dbud = new dbUsersDriver();
    $uData = $dbud->getUser($log, $pas);
    $name = $uData['name'];
    $level = $uData['level'];
    $messg = "
                <h1 align='center'>".$name."</h1>
                <p align='center'>Уровень: ".$level."</p>
                ";
    if (!($uData)){
        $messg = "
            <script>
                window.onload = alert('Something goes wrong!');
            </script>
        ";
        require("indexSourses/indexAside.html");
    } else {
        $file = 'indexSourses/uacForm.php';
    } 
    echo $messg;
    if (!empty($file)){
        include($file);
    }
}

require("indexSourses/indexArticle.php");

?>          
        <footer class="main">
            <hr>
            <sub><b>Специалист без опыта не востребован</b></sub>
            <p> 
                2019 <br>
                МТКП
            </p>
        </footer>
        
    </body>
</html>