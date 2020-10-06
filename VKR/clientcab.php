<?php
error_reporting(0);
session_start();
$namep=$_SESSION['name'];

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
    $query = "SELECT id_tour,name,st_date,ov_date,visa,cost,country FROM tour WHERE country LIKE '%{$select1}%'";
    $result = mysqli_query($link, $query);
    if ($result) {

        $rows = mysqli_num_rows($result); // количество полученных строк
        if ($rows != 0) {
            echo "<table class='cl' border='1'><tr><th>Номер</th><th>Название</th><th>Начало</th><th>Конец</th><th>Виза</th><th>Цена</th><th>Страна</th></tr>";
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
    <title>Личный кабинет</title>
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
<form class="form1" >
    <p class="priv">
        Добро пожаловать в личный кабинет,<?php echo $namep; ?><br>
        Спасибо,что зарегистрировались на нашем сайте!<br>
        Теперь вам доступно больше функций!Если вы уже определились с туром,то его можно забронировать
        и после этого Вам позвонит наш оператор и подтвердит оформление!
        <br>А пока вы можете просмотреть весь список туров подходящих для вас!
    </p>

</form>

<form class="filter" action="" method="GET" >
    <p>Выберите город куда бы вы хотели поехать!</p>
    <div>
        Введите название страны:
        <input type="text" size="55" id="title" name="title"><br><br>

        <br><br>
        <button class="dela" type="submit" > Найти</button>
    </div>


</form>

</body>
</html>