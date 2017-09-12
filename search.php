<div id="text_block">
<?php
require 'scripts/connect.php';
function search ($query, $link)
{
    $query = trim($query);
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

                /*do {
                    // Делаем запрос, получающий ссылки на статьи
                    $q1 = "SELECT `link` FROM `table_name` WHERE `uniq_id` = '$row[page_id]'";
                    $result1 = mysqli_query($link, $q1);

                    if (mysqli_affected_rows($link) > 0) {
                        $row1 = mysqli_fetch_assoc($result1);
                    }

                    $text .= '<p><a> href="'.$row1['link'].'/'.$row['category'].'/'.$row['uniq_id'].'" title="'.$row['title_link'].'">'.$row['title'].'</a></p>
                    <p>'.$row['desc'].'</p>';

                } while ($row = mysqli_fetch_assoc($result));*/
                $text .= '<p>Название тура: '.$row['tour_name'].'</p>';
                $text .= '<p>Краткое описание тура: '.$row['tour_descr'].'</p>';
                $text .= '<p><a href="'.$row['tour_link'].'">Ссылка на тур</a></p>';

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
if (isset($_POST['query']))
{
    $search_result = search($_POST['query'], $link);
    echo $search_result;
}
?>
</div>
