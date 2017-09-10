<div id="text_block">

<?php
require 'scripts/connect.php';

ini_set('display_errors', 1);
error_reporting(E_ALL);

$data=$_POST;

//if(isset($data['do_signup']))
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors=array();
    //обработка регистрации

    if($data['login']=='')
    {
        $errors[]="Логин не введен";
    }
    if($data["password"]=='')
    {
        $errors[]="Пароль не введен";
    }
}
if(empty($errors))
{
    $b=check($data, $link);
    if($b==TRUE)
    {
        setcookie('login',$data['login'],time()+86400);
        setcookie('password',$data['password'],time()+86400);
        $log = $data['login'];
        echo "Вы вошли как $log";
//        if(count($_COOKIE>0))
//        {
//            header("Location: index.php");
//        }
    }
}
else
{
    echo '<div id="error">'.array_shift($errors).'</div>';
}

function check($data, $link)
{
    $login=$data['login'];
    $pass=$data['password'];
    $flag = False;

    $success = mysqli_query($link, "SELECT * FROM `users` WHERE `username` = '$login' AND `password` = '$pass'");
    if($success->num_rows === 1)
    {
        $ip = (string)$_SERVER['REMOTE_ADDR'];
        $flag =True;
    }
    else
    {
        echo "Login or password is incorrect";
    }
    mysqli_close($link);
    return $flag;
}
?>
</div>