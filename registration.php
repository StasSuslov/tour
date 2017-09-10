<?php
if(isset($_POST['submit']))
{
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
    $err = array();
    # проверям логин
    if(!preg_match("/^[a-zA-Z0-9]+$/",$_POST['login']))
    {
        $err[] = "Логин может состоять только из букв английского алфавита и цифр";
    }
    if(strlen($_POST['login']) < 3 or strlen($_POST['login']) > 32)
    {
        $err[] = "Логин должен быть не меньше 3-х символов и не больше 30";
    }

    # проверяем, не сущестует ли пользователя с таким именем

    $query = mysqli_query($link, "SELECT COUNT(user_id) FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."'");
    if(array_pop(mysqli_fetch_assoc($query)) > 0)
    {
        $err[] = "Пользователь с таким логином уже существует в базе данных";
    }
    if($password !== $rep_password)
    {
        $err[] = "Пароли не совпадают";
    }
    # Если нет ошибок, то добавляем в БД нового пользователя

    if(count($err) == 0)
    {
        $login = htmlspecialchars($_POST['login']);
        # Убераем лишние пробелы и делаем двойное шифрование
        $password = password_hash(trim($_POST['password']), PASSWORD_DEFAULT);
        $insert_sql = "INSERT INTO  users (user_id, user_login, user_password, user_hash, user_ip, Name, Surname, Mail, Phone)" .
            "VALUES (NULL, '{$login}','{$password}', NULL, NULL, '{$name}','{$surname}','{$mail}','{$phone}');";
        mysqli_query($link, $insert_sql);
        mysqli_close($link);
        header("Location: ?type=6"); exit();
    }
    else
    {
        print "<b>При регистрации произошли следующие ошибки:</b><br>";
        foreach($err AS $error)
        {
            print $error."<br>";
        }
    }
}
?>

<div id="text_block">
<form method="post" name="registration">
    <p>Введите логин</p>
    <div>
        <input type="text" name="login" maxlength="255" value="" placeholder="Логин" autofocus required>
    </div>

    <p>Введите имя</p>
    <div>
        <input type="text" name="name" maxlength="255" value="" placeholder="Имя" autofocus required>
    </div>

    <p>Введите фамилию</p>
    <div>
        <input type="text" name="surname" maxlength="255" value="" placeholder="Фамилия" autofocus required>
    </div>

    <p>Введите почтовый адрес</p>
    <div>
        <input type="text" name="mail" maxlength="255" value="" placeholder="Почта" autofocus required>
    </div>

    <p>Введите номер телефона</p>
    <div>
        <input type="text" name="phone" maxlength="255" value="" placeholder="Номер телефона" autofocus required>
    </div>

    <p>Введите пароль</p>
    <div>
        <input type="password" name="password" maxlength="255" value="" placeholder="Пароль" autofocus required>
    </div>

    <p>Повторите пароль</p>
    <div>
        <input type="password" name="rep_password" maxlength="255" value="" placeholder="Повторите пароль" autofocus required>
    </div>
    <br>
    <div>
        <input type="submit" name="submit" value="Зарегистрироваться">
    </div>
</form>
</div>