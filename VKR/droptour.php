<?php
error_reporting(0);
$drop_title = $_POST['droptour'];
$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='tour';
$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');

$query ="DELETE FROM tour WHERE id_tour='$drop_title'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{

    header ('Location: admincab.php');  // перенаправление на нужную страницу
    exit();
    // перенаправление на нужную страницу

}
?>