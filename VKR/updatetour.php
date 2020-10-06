<?php
error_reporting(0);
$update_title = $_POST['title'];
$update_col=$_POST['fun'];
$update_znach=$_POST['znach'];
$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='tour';
$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');
echo $update_title;
echo $update_col;
echo $update_znach;
$query ="UPDATE tour SET $update_col='$update_znach' where name='$update_title'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{

    header ('Location: admincab.php');  // перенаправление на нужную страницу
    exit();
    // перенаправление на нужную страницу

}
?>