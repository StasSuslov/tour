<div id="header">
    <table width="100%">
        <tr>
            <td><a href="index.php"><img src="images/logo_2013_eng_flag.png" width="160" height="80" alt="Лого" align="left"></a></td>
            <td>Поиск по сайту</td>
            <td>
                <?php
                if(isset($_COOKIE['login']))
                {
                    $log = $_COOKIE['login'];
                    echo "Вы вошли как $log. ";
                    echo '<a href="logout.php">Выйти</a>';
                }
                else
                {
                    echo '<a href="?type=6">Авторизация</a>';
                }
                ?>
            </td>
        </tr>
    </table>
</div>