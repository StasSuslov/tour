<?php
if(isset($_COOKIE['login']))
{
    setcookie('login', NULL);
    setcookie('password', NULL);
    header("Location: index.php");
}
else
{
    echo "Logut error!";
}