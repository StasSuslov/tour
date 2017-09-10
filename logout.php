<?php
if(isset($_COOKIE['id']) and isset($_COOKIE['hash']))
{
    setcookie('id', NULL);
    setcookie('hash', NULL);
    header("Location: index.php");
}
else
{
    echo "Logout error!";
}