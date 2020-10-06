<?php

session_start();
$name = $_SESSION['name'];


$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='client';
$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');
$query ="DELETE FROM client  where name='$name'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{

    header ('Location: index.php');  // перенаправление на нужную страницу
    exit();
    // перенаправление на нужную страницу

}
?>
