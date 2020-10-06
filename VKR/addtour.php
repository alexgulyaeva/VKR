<?php
error_reporting(0);
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];
$t4 = $_POST['t4'];
$t5 = $_POST['t5'];
$t6 = $_POST['t6'];
$t7 = $_POST['t7'];
$t8 = $_POST['t8'];
$t10 = $_POST['t10'];//номер
$t11= $_POST['t11'];//имя
$t9 = $_POST['t9'];
$t12 = $_POST['t12'];
$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='tour';
$table2 = 'param';

$link=mysqli_connect($host,$user,$password,$database);
if(!$link)

    die(
    'Соединения нет!');




$query ="SELECT id_param FROM param where (klimat='$t3' and child='$t4' and landscape='$t8' and active='$t9') ";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
$rows = mysqli_num_rows($result);
$rows = mysqli_num_rows($result);
if($rows>0)
{
    $rc=mysqli_fetch_assoc($result);
    $param=$rc['id_param'];

}
else
{
    $query ="SELECT MAX(id_param) FROM param";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $rows1=mysqli_num_rows($result);
    $rc=mysqli_fetch_assoc($result);
    $param=$rc['MAX(id_param)'];
    $param=$param+1;
    $query ="INSERT INTO param VALUES('$param','$t4','$t8','$t3','$t9')";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));


}



$query ="SELECT id_comp FROM comp where name='$t11' ";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$rows = mysqli_fetch_row($result); // количество полученных строк
$comp=$rows[0];
$query ="SELECT id_bus FROM trans where number='$t10' ";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$rows = mysqli_fetch_row($result); // количество полученных строк
$bus=$rows[0];



$query ="SELECT MAX(id_tour) FROM tour";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));

$rows = mysqli_fetch_row($result); // количество полученных строк
$now_rows1=$rows[0]+1;

$query ="INSERT INTO tour VALUES('$now_rows1','$t1','$t5','$t6','$t7','$param','$bus','$comp','$t2','$t12')";
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