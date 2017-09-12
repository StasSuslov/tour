<div id="header">
    <table width="100%">
        <tr>
            <td>
                <a href="index.php"><img src="images/logo_2013_eng_flag.png" width="160" height="80" alt="Лого" align="left">
            </td>
            <td>
                <form name="search" method="post" action="?type=16">
                    <input type="search" name="query" placeholder="Поиск">
                    <input type="hidden" name="csrf" value="<?= $token ?>" >
                    <button type="submit">Найти</button>
                </form>
            </td>
            <td>
                <?php
                require 'scripts/connect.php';
                if(isset($_COOKIE['id']))
                {
                    $query = mysqli_query($link, "SELECT user_login FROM users WHERE user_id='".mysqli_real_escape_string($link, $_COOKIE['id'])."' LIMIT 1");
                    $data = mysqli_fetch_assoc($query);
                    $log = $data['user_login'];
                    echo "Вы вошли как $log.<br>";
                    echo '<a href="logout.php">Выйти</a>';
                }
                else
                {
                    echo '<a href="?type=6">Авторизация</a>';
                }
                mysqli_close($link);
                ?>
            </td>
        </tr>
    </table>
</div>