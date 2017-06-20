<?php
$link = mysqli_connect("localhost", "root", "", "sitedb")//параметры в скобках ("хост", "имя пользователя", "пароль")
or die("<p>Ошибка подключения к базе данных! " . mysqli_error($link) . "</p>");
mysqli_query($link, "SET NAMES UTF8");

mysqli_select_db($link, "sitedb")//параметр в скобках ("имя базы, с которой соединяемся")
or die("<p>Ошибка выбора базы данных! ". mysqli_error($link) . "</p>");