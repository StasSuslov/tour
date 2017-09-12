<?php
//session_start();
if(isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    setcookie('id', NULL);
    setcookie('hash', NULL);
    unset($_SESSION['id']);
    unset($_SESSION['hash']);
//    unset($_SESSION['token']);
    header("Location: index.php");
}
else
{
    echo "Logout error!";
}