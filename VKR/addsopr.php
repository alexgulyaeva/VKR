<?php
$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='comp';

$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');

$query ="SELECT MAX(id_comp) FROM comp";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$rows = mysqli_fetch_row($result); // количество полученных строк
$now_rows=$rows[0]+1;
echo $now_rows;


$name = htmlentities(mysqli_real_escape_string($link, $_POST['namesopr']));
$study = htmlentities(mysqli_real_escape_string($link, $_POST['studysopr']));
$staz = htmlentities(mysqli_real_escape_string($link, $_POST['stazsopr']));


$query ="INSERT INTO comp VALUES('$now_rows','$name','$study','$staz')";


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