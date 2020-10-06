<?php
session_start();
$name=$_SESSION['name'];
error_reporting(0);
$select1 = $_GET['title']; //klimat
/*$select2 = $_GET['select2']; //child
$select3 = $_GET['select3']; //landscape
$select4 = $_GET['select4']; //type otdix*/

$host = 'localhost';
$database = 'vkr2';
$user = 'root';
$password = '123456789';
$table = 'tour';

$link = mysqli_connect($host, $user, $password, $database);
if ($link) {
    $query = "SELECT id_tour,name,st_date,ov_date,visa,cost,country FROM tour WHERE name LIKE '%{$select1}%'";
    $result = mysqli_query($link, $query);
    if ($result) {

        $rows = mysqli_num_rows($result); // количество полученных строк
        if ($rows != 0) {
            echo "<table class='cl5' border='1'><tr><th>Номер</th><th>Название</th><th>Начало</th><th>Конец</th><th>Виза</th><th>Цена</th><th>Страна</th></tr>";
            for ($i = 0; $i < $rows; ++$i) {
                $row = mysqli_fetch_row($result);
                echo "<tr>";
                for ($j = 0; $j < 7; ++$j) echo "<td>$row[$j]</td>";
                echo "</tr>";
            }
            echo "</table>";

            // очищаем результат
            mysqli_free_result($result);
        }
        else
        {

        }
    } else {
        echo "<script>alert(\"Извините,что-то пошло не так!\");</script>";
    }
    /*AND child='$select2' AND landscape='select3' and active='select4'*/
}
else
{
    echo "<script>alert(\"Извините,что-то пошло не так!\");</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Бронирование заказа</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<li class="navbar-logo" href=""><img src="images/pic1.png"></li>
<nav>

    <ul class="top">


        <li><a href="ordering.php">Забронировать тур</a> </li>
        <li><a href="test1.php">Подобрать тур</a> </li>
        <li><a href="settings.php">Настройки</a> </li>
        <li><a href="clientcab.php">Личный кабинет</a> </li>
        <li><button class="login2" ><a href="index.php">Выход</a></button></li>
    </ul>
</nav>
<div class="bron">
    <form class="addt2" method="POST" id="addt" action="" >
        <div class="order">
        <p class="k">Оформление заказа:</p>
        <br>

        1.Имя и фамилия:<br>
        <input type="text" size="55" id="t1" name="t1"><br><br>
            2.Паспортные данные:<br>
            <input type="text" size="55" id="t6" name="t6"><br><br>
        3.Контактный телефон:<br>
        <input type="text" size="55" id="t2" name="t2"><br><br>
            4.Номер тура:<br>
            <input type="text" size="55" id="t3" name="t3"><br><br>
            5.Количество мест:<br>
            <input type="text" size="55" id="t4" name="t4"><br><br>
            6. Нужно ли оформлять визу:<br>
            <input type="text" size="55" id="t5" name="t5"><br><br>
            (Проверьте введённые данные,номер тура можно проверить ниже)
        </div>
        <button class="ord" type="submit" onclick="order()">Забронировать</button>
    </form>
</div>
<form class="filter2" action="" method="GET" >
    <p>Выберите город куда бы вы хотели поехать!</p>
    <div>
        Введите название страны:
        <input type="text" size="55" id="title" name="title"><br><br>


        <button class="dela" type="submit" > Найти</button>
    </div>


</form>

<script>
    function order(){
        $n=document.getElementById('t1').value;
        $num=document.getElementById('t2').value;
        $to=document.getElementById('t3').value;
        $c=document.getElementById('t4').value;
        if($n!=="" || $num !==""|| $to !==""|| $c!=="")
        {
            alert("Внимание,тур будет забронировать и наш оператор свяжется с вами!");
            document.getElementById('addt').action='order.php';
        }
        else
        {
            alert("Проверьте введённые данные!");
        }
    }
</script>
</body>
</html>