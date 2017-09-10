<div id="text_block">
<?php
require 'scripts/connect.php';

if(isset($_POST["name"]))
    $name = htmlspecialchars($_POST["name"]);
if(isset($_POST["surname"]))
    $surname = htmlspecialchars($_POST["surname"]);
if(isset($_POST["mail"]))
    $mail = htmlspecialchars($_POST["mail"]);
if(isset($_POST["phone"]))
    $phone = htmlspecialchars($_POST["phone"]);
if(isset($_POST["login"]))
    $login = htmlspecialchars($_POST["login"]);
if(isset($_POST["password"]))
    $password = htmlspecialchars($_POST["password"]);
if(isset($_POST["rep_password"]))
    $rep_password = htmlspecialchars($_POST["rep_password"]);

if($password == $rep_password)
{
    $insert_sql = "INSERT INTO  users (id, username, password, First_name, Second_Name, mail, phonenumber)" .
        "VALUES (NULL, '{$login}','{$password}','{$name}','{$surname}','{$mail}','{$phone}');";
    mysqli_query($link, $insert_sql);
    mysqli_close($link);
    echo "Вы успешно зарегистрированы на сайте!";
}
else
{
  echo "Пароли не совпадают!";
}
?>
</div>