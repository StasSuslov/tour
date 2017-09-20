<div id="text_block">
<?php
// Скрипт проверки
# Соединямся с БД
require 'scripts/connect.php';
//session_start();
if (isset($_COOKIE['id']) and isset($_COOKIE['hash']) and isset($_SESSION['id']) and isset($_SESSION['secret']))
{
    $query = mysqli_query($link, "SELECT * FROM users WHERE user_id = '".intval($_COOKIE['id'])."' LIMIT 1");
    $userdata = mysqli_fetch_assoc($query);
    if(($userdata['user_hash'] !== $_COOKIE['hash']) or ($userdata['user_id'] !== $_COOKIE['id']) /*or (($userdata['user_ip'] !== $_SERVER['REMOTE_ADDR'])  and ($userdata['user_ip'] !== "0"))*/)
    {
        setcookie("id", "", time() - 3600*24*30*12, "/");
        setcookie("hash", "", time() - 3600*24*30*12, "/");
        $_SESSION['id'] = NULL;
        $_SESSION['secret'] = NULL;
//        $_SESSION['token'] = NULL;
        print "Хм, что-то не получилось";
    }
    else
    {
        print "Привет, ".$userdata['user_login'].". Всё работает!";
    }
}
else
{
    print "Включите куки";
}
?>
</div>
