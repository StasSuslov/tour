<?php
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
    $b=check($data);
    if($b==TRUE)
    {
        setcookie('login',$data['login'],time()+86400);
        setcookie('password',$data['password'],time()+86400);
        if(count($_COOKIE>0))
        {
            header("Location: index.php");
        }
    }
}
else
{
    echo '<div id="error">'.array_shift($errors).'</div>';
}

function check($data)
{
    $login=$data['login'];
    $pass=$data['password'];
    $flag = False;
    $mysqli = new mysqli("localhost", "root", "", "sitedb");

    /* проверка соединения */
    if (mysqli_connect_errno())
    {
        printf("Не удалось подключиться: %s\n", mysqli_connect_error());
        exit();
    }
    $mysqli->query("SET NAMES 'utf8'");

    $success = $mysqli->query("SELECT * FROM `users` WHERE `username` = '$login' AND `password` = '$pass'");
    if($success->num_rows === 1)
    {
        $ip = (string)$_SERVER['REMOTE_ADDR'];

        $flag =True;
    }
    else
    {
        echo "Login or password is incorrect";
    }
    $mysqli->close();
    return $flag;
}
?>

