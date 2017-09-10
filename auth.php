<?php
require 'scripts/connect.php';
// Страница авторизации
# Функция для генерации случайной строки
function generateCode($length=6)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length)
    {
        $code .= $chars[mt_rand(0,$clen)];
    }
    return $code;
}
if(isset($_POST['submit']))
{
    # Вытаскиваем из БД запись, у которой логин равняеться введенному
    $query = mysqli_query($link, "SELECT user_id, user_password FROM users WHERE user_login='".mysqli_real_escape_string($link, $_POST['login'])."' LIMIT 1");
    $data = mysqli_fetch_assoc($query);
    # Сравниваем пароли
    if(password_verify(trim($_POST['password']), $data['user_password']))
//    if($data['user_password'] === password_hash($_POST['password'], PASSWORD_DEFAULT))
    {
        # Генерируем случайное число и шифруем его
        $hash = password_hash(generateCode(10), PASSWORD_DEFAULT);
//        if(!@$_POST['not_attach_ip'])
//        {
            # Если пользователя выбрал привязку к IP

            # Переводим IP в строку
//            $insip = ", user_ip=INET_ATON('".$_SERVER['REMOTE_ADDR']."')";
//        }
        # Записываем в БД новый хеш авторизации и IP
        mysqli_query($link, "UPDATE users SET user_hash='".$hash."' ".$insip." WHERE user_id='".$data['user_id']."'");
        # Ставим куки
        setcookie("id", $data['user_id'], time()+60*60*24*30);
        setcookie("hash", $hash, time()+60*60*24*30);
        # Переадресовываем браузер на страницу проверки нашего скрипта

        header("Location: ?type=15"); exit();
    }
    else
    {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>
<div id="text_block">
<form method="post" name="auth">
    <p>Введите логин</p>
    <div>
        <input type="text" name="login" maxlength="255" value="" placeholder="Логин" autofocus required>
    </div>
    <p>Введите пароль</p>
    <div>
        <input type="password" name="password" maxlength="255" value="" placeholder="Пароль" autofocus required>
    </div>
    <br>
<!--    <div>-->
<!--        Не прикреплять к IP(не безопасно) <input type="checkbox" name="not_attach_ip"><br>-->
<!--    </div>-->
<!--    <br>-->
    <div>
        <input type="submit" name="submit" value="Вход">
    </div>
</form>
<p><a href="?type=7">Зарегистрируйтесь</a>, если у Вас нет учетной записи.</p>
</div>