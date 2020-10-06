<?php
session_start();
$name = $_SESSION['name'];
error_reporting(0);
$update_title = $_POST['namef'];
echo $update_title;
$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='client';
$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');
$query1 = "SELECT login FROM client where name='$name'";
$result1 = mysqli_query($link, $query1) or die("Ошибка " . mysqli_error($link));
$rows = mysqli_fetch_row($result1);

$query ="UPDATE client SET login='$update_title' where login='$rows[0]'";
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
