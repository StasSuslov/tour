<form action="reg_proc.php" method="post" name="auth">
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
        <input type="text" name="password" maxlength="255" value="" placeholder="Пароль" autofocus required>
    </div>

    <p>Повторите пароль</p>
    <div>
        <input type="text" name="rep_password" maxlength="255" value="" placeholder="Повторите пароль" autofocus required>
    </div>
<br>
    <div>
        <input type="submit" name="send" value="Зарегистрироваться">
    </div>
</form>