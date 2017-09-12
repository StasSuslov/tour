<?php

require 'scripts/connect.php';

if(isset($_POST["FIO"]))
    $FIO = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["FIO"]), ENT_QUOTES));
if(isset($_POST["City"]))
    $city = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["City"]), ENT_QUOTES));
if(isset($_POST["e_mail"]))
    $e_mail = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["e_mail"]), ENT_QUOTES));
if(isset($_POST["phone"]))
    $phone = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["phone"]), ENT_QUOTES));
if(isset($_POST["tour"]))
    $tour = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["tour"]), ENT_QUOTES));
if(isset($_POST["num_persons"]))
    $num_persons = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["num_persons"]), ENT_QUOTES));
if(isset($_POST["month_in"]))
    $month_in = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["month_in"]), ENT_QUOTES));
if(isset($_POST["day_in"]))
    $day_in = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["day_in"]), ENT_QUOTES));
if(isset($_POST["year_in"]))
    $year_in = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["year_in"]), ENT_QUOTES));
if(isset($_POST["month_out"]))
    $month_out = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["month_out"]), ENT_QUOTES));
if(isset($_POST["day_out"]))
    $day_out = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["day_out"]), ENT_QUOTES));
if(isset($_POST["year_out"]))
    $year_out = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["year_out"]), ENT_QUOTES));
if(isset($_POST["comment"]))
    $comment = strip_tags(htmlspecialchars(mysqli_real_escape_string($link, (string)$_POST["comment"]), ENT_QUOTES));

$date_in = $day_in . $month_in . $year_in;
$date_out = $day_out . $month_out . $year_out;



$insert_sql = "INSERT INTO tour_orders (id, FIO, city, e_mail, phone, tour, num_persons, date_in, date_out)" .
    "VALUES (NULL, '".$FIO."', '".$city."', '".$e_mail."', '".$phone."', '".$tour."', '{$num_persons}', '{$date_in}', '{$date_out}');";
mysqli_query($link, $insert_sql);
mysqli_close($link);
?>

<div id="text_block">
    <p>
        <b>Ваша заявка на тур успешно отправлена! Спасибо!</b><br>
        <br>
        <br>
        <b>Мы свяжемся с Вами по указанным координатам.</b><br>
    </p>
</div>