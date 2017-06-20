<?php

require 'scripts/connect.php';

if(isset($_POST["FIO"]))
    $FIO = htmlspecialchars($_POST["FIO"]);
if(isset($_POST["City"]))
    $city = htmlspecialchars($_POST["City"]);
if(isset($_POST["e_mail"]))
    $e_mail = htmlspecialchars($_POST["e_mail"]);
if(isset($_POST["phone"]))
    $phone = htmlspecialchars($_POST["phone"]);
if(isset($_POST["tour"]))
    $tour = htmlspecialchars($_POST["tour"]);
if(isset($_POST["num_persons"]))
    $num_persons = htmlspecialchars($_POST["num_persons"]);
if(isset($_POST["month_in"]))
    $month_in = htmlspecialchars($_POST["month_in"]);
if(isset($_POST["day_in"]))
    $day_in = htmlspecialchars($_POST["day_in"]);
if(isset($_POST["year_in"]))
    $year_in = htmlspecialchars($_POST["year_in"]);
if(isset($_POST["month_out"]))
    $month_out = htmlspecialchars($_POST["month_out"]);
if(isset($_POST["day_out"]))
    $day_out = htmlspecialchars($_POST["day_out"]);
if(isset($_POST["year_out"]))
    $year_out = htmlspecialchars($_POST["year_out"]);
if(isset($_POST["comment"]))
    $comment = htmlspecialchars($_POST["comment"]);

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