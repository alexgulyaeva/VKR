<?php
echo "Hello!";
/*$select1 = $_GET['select1']; //klimat
$select2 = $_GET['select2']; //child
$select3 = $_GET['select3']; //landscape
$select4 = $_GET['select4']; //type otdix
$select5 = $_GET['select5']; //type otdix*/
$id_tour = $_POST['t3']; //type otdix
$number = $_POST['t4'];
$visa = $_POST['t5'];
$telephone = $_POST['t2'];
$passport = $_POST['t6'];
session_start();
$name=$_SESSION['name'];

$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='client';
$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');
$query ="SELECT id_client FROM client WHERE name='$name'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$rows = mysqli_fetch_row($result); // количество полученных строк
$id_client=$rows[0];

$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='tour';
$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');
$query ="SELECT cost FROM tour WHERE id_tour='$id_tour'";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$rows = mysqli_fetch_row($result); // количество полученных строк
$cost_tour=$rows[0];

$total=$cost_tour*$number;
$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='bron';
$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');

$query ="SELECT MAX(id_bron) FROM bron";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$rows = mysqli_fetch_row($result); // количество полученных строк
$id_bron=$rows[0]+1;
$query ="INSERT INTO bron VALUES('$id_bron','$number','$visa','$telephone','$passport','$total','$id_client','$id_tour')";


// создание строки запроса


// выполняем запрос
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    header ('Location: clientcab.php');  // перенаправление на нужную страницу
    exit();
    // перенаправление на нужную страницу

}
?>