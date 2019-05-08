<?php 
session_start();
$_SESSION['login'] = false;

header("Location: ". $_SESSION['path']);
exit();
?>