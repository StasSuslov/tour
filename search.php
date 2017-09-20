<div id="text_block">
<?php
require 'scripts/connect.php';
//session_start();
function search ($query, $link)
{
    $query = trim((string)$query);
    $query = mysqli_real_escape_string($link, $query);
    $query = htmlspecialchars($query);

    if (!empty($query))
    {
        if (strlen($query) < 3) {
            $text = '<p>Слишком короткий поисковый запрос.</p>';
        } else if (strlen($query) > 128) {
            $text = '<p>Слишком длинный поисковый запрос.</p>';
        } else {
            $q = "SELECT `tour_name`, `tour_descr`, `tour_link`
                  FROM `tours`
                  WHERE `tour_name` LIKE '%$query%' OR `tour_descr` LIKE '%$query%'";

            $result = mysqli_query($link, $q);

            if (mysqli_affected_rows($link) > 0) {
                $row = mysqli_fetch_assoc($result);
                $num = mysqli_num_rows($result);

                $text = '<p>По запросу <b>'.$query.'</b> найдено совпадений: '.$num.'</p>';

                do
                {
                    $text .= '<p>Название тура: '.$row['tour_name'].'</p>';
                    $text .= '<p>Краткое описание тура: '.$row['tour_descr'].'</p>';
                    $text .= '<p><a href="'.$row['tour_link'].'">Ссылка на тур</a></p>';
                } while ($row = mysqli_fetch_assoc($result));

            } else {
                $text = '<p>По вашему запросу ничего не найдено.</p>';
            }
        }
    }
    else
    {
        $text = '<p>Задан пустой поисковый запрос.</p>';
    }

    return $text;
}
//echo $_POST['csrf'];
//echo $_SESSION['hash'];
if(isset($_SESSION['secret'])) {
    if (password_verify($_SESSION['secret'], (string)$_POST['csrf'])) {
        if (isset($_POST['query'])) {
            $search_result = search($_POST['query'], $link);
            echo $search_result;
        }
    } else {
        echo "CSRF";
    }
}
else
{
    echo "CSRF";
}
?>
</div>
