<?php

error_reporting(0);
$update_title = $_POST['blockclient'];

$host = 'localhost';
$database = 'vkr2';
$user = 'root';
$password = '123456789';
$table = 'client';
$link = mysqli_connect($host, $user, $password, $database);
if (!$link)

    die(
    'Соединения нет!');
echo $update_title;
echo $update_col;
echo $update_znach;
$query = "UPDATE client SET block='Да' where login='$update_title'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if ($result) {

    header('Location: admincab.php');  // перенаправление на нужную страницу
    exit();
    // перенаправление на нужную страницу

}
