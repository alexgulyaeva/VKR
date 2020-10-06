<?php
$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='client';

$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');

$query ="SELECT MAX(id_client) FROM client";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$rows = mysqli_fetch_row($result); // количество полученных строк
$now_rows=$rows[0]+1;
echo $now_rows;


$name = htmlentities(mysqli_real_escape_string($link, $_POST['namer']));
$number = htmlentities(mysqli_real_escape_string($link, $_POST['numberr']));
$adress = htmlentities(mysqli_real_escape_string($link, $_POST['adressr']));
$password = htmlentities(mysqli_real_escape_string($link, $_POST['password1']));
$login = htmlentities(mysqli_real_escape_string($link, $_POST['login']));

    $query ="INSERT INTO client VALUES('$now_rows','$name','$adress','$password','$login','$number','NULL')";


// создание строки запроса


// выполняем запрос
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    header ('Location: index2.html');  // перенаправление на нужную страницу
    exit();
     // перенаправление на нужную страницу

}
?>