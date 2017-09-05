<form action="auth_proc.php" method="post" name="auth">
    <p>Введите логин</p>
    <div>
        <input type="text" name="login" maxlength="255" value="" placeholder="Логин" autofocus required>
    </div>
    <p>Введите пароль</p>
    <div>
        <input type="text" name="password" maxlength="255" value="" placeholder="Пароль" autofocus required>
    </div>
    <br>
    <div>
        <input type="submit" name="send" value="Вход">
    </div>
</form>
<p><a href="?type=7">Зарегистрируйтесь</a>, если у Вас нет учетной записи.</p>