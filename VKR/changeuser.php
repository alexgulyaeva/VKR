<?php

session_start();
$name = $_SESSION['name'];

$t1 = $_POST['t1'];
$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='client';
$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');
$query ="UPDATE client SET password='$t1' where name='$name'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
if($name==" admin")
{ header ('Location: adminsett.php');  // перенаправление на нужную страницу
    exit();}
else
{header ('Location: clientcab.php');  // перенаправление на нужную страницу
    exit();}

    // перенаправление на нужную страницу

}
?>