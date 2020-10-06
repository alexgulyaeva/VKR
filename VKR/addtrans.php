<?php
$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='trans';

$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');

$query ="SELECT MAX(id_bus) FROM trans";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$rows = mysqli_fetch_row($result); // количество полученных строк
$now_rows=$rows[0]+1;
echo $now_rows;


$typetrans = htmlentities(mysqli_real_escape_string($link, $_POST['typetrans']));
$marka = htmlentities(mysqli_real_escape_string($link, $_POST['marka']));
$numbertrans = htmlentities(mysqli_real_escape_string($link, $_POST['numbertrans']));


$query ="INSERT INTO trans VALUES('$now_rows','$typetrans','$numbertrans','$marka')";


// создание строки запроса


// выполняем запрос
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    header ('Location: admincab.php');  // перенаправление на нужную страницу
    exit();
    // перенаправление на нужную страницу

}
?>