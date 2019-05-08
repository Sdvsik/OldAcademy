<!--
создание нового аккаунта на основе данных формы регистрации
finished
-->

<?php

require("dbUsersDriver.php");

$dbd = new dbUsersDriver("users");

$log = $_POST['login'];
$pas = $_POST['paswd'];
$name = $_POST['name'];

if ($dbd->isAccount($log)){
    echo "  <script>
                alert('Ошибка: логин уже занят');
            </script>";
    header("Location: ../registr.php");
    exit;
}

$dbd->addUser($name, $log, $pas);

header("Location: ../index.php");
exit;

?>