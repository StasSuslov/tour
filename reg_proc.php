<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$data=$_POST;

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $errors=array();

    if($data["password"] != $data["rep_password"])
    {
        $errors[]="Пароли не совпадают";
    }
}
if(empty($errors))
{
    $flag = False;
    $mysqli = new mysqli("localhost", "root", "", "sitedb");
    if (mysqli_connect_errno())
    {
        printf("Не удалось подключиться: %s\n", mysqli_connect_error());
        exit();
    }
    $mysqli->query("SET NAMES 'utf8'");
}
else
{
    echo '<div id="error">'.array_shift($errors).'</div>';
}