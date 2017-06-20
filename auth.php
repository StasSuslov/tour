<!--<html>-->
<!--<head>-->
<!--    <title>Авторизация</title>-->
<!--    <link href="style/style.css" rel="stylesheet" type="text/css" media="all">-->
<!--    <meta charset="utf-8">-->
<!--</head>-->
<!--<body>-->
<!--<div id="panel"></div>-->
<!--<div id="wrap">-->
<!--    <div id="header">-->
<!--        --><?php //include ('header.php');?>
<!--    </div>-->
<!--    <div id="block-menu">-->
<!--        --><?php //include ('top-menu.php');?>
<!--    </div>-->
<!--    <div id="content">-->
        <form action="auth_proc.php" method="post" name="auth">
            <p>Введите логин</p>
            <div>
                <input type="text" name="login" maxlength="255" value="" placeholder="Логин" autofocus required>
            </div>
            <p>Введите пароль</p>
            <div>
                <input type="text" name="password" maxlength="255" value="" placeholder="Пароль" autofocus required>
            </div>
            <div>
                <input type="submit" name="send" value="Вход">
            </div>
        </form>
        <p><a href="?type=7">Зарегистрируйтесь</a>, если у Вас нет учетной записи.</p>
<!--    </div>-->
<!--    <div id="footer">-->
<!--        --><?php //include ('footer.php');?>
<!--    </div>-->
<!--</div>-->
<!--</body>-->
<!--</html>-->