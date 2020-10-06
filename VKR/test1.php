<?php
error_reporting(0);
$select1 = $_GET['select1']; //klimat
$select2 = $_GET['select2']; //child
$select3 = $_GET['select3']; //landscape
$select4 = $_GET['select4']; //type otdix
$select5 = $_GET['select5']; //type otdix


$host = 'localhost';
$database = 'vkr2';
$user = 'root';
$password = '123456789';
$table = 'tour';
$table1 = 'param';
$link = mysqli_connect($host, $user, $password, $database);
if(!$link)


    die(
    'Соединения нет!');

    $query = "SELECT id_param FROM param WHERE (klimat='$select1' AND child='$select5'AND landscape='$select2'and active='$select3')";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $rows = mysqli_num_rows($result);
$rc=mysqli_fetch_assoc($result);
$param=$rc['id_param'];
   $query = "SELECT id_tour,name,st_date,ov_date,visa,cost,country FROM tour WHERE id_param='$param' and cost<'$select4'";
    $result = mysqli_query($link, $query)or die("Ошибка " . mysqli_error($link));;
    if ($result) {

        $rows = mysqli_num_rows($result); // количество полученных строк
        if ($rows != 0) {
            echo "<br><br><table class='cl2' border='1'><tr><th>Номер</th><th>Название</th><th>Начало</th><th>Конец</th><th>Виза</th><th>Цена</th><th>Страна</th></tr>";
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
            $query = "SELECT id_tour,name,st_date,ov_date,visa,cost,country FROM tour WHERE  id_param='$param' ";
    $result = mysqli_query($link, $query)or die("Ошибка " . mysqli_error($link));;
    if ($result) {

        $rows = mysqli_num_rows($result); // количество полученных строк
        if ($rows != 0) {
            echo "<script>alert(\"Извините,мы не смогли подобрать тур по таким параметрам,поэтому выводим туры подходящие по всем параметрам,кроме цены!\");</script>";
            echo "<br><br><table class='cl2' border='1'><tr><th>Номер</th><th>Название</th><th>Начало</th><th>Конец</th><th>Виза</th><th>Цена</th><th>Страна</th></tr>";
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
        $query = "SELECT id_tour,name,st_date,ov_date,visa,cost,country FROM tour WHERE cost<'$select4' ";
        $result = mysqli_query($link, $query)or die("Ошибка " . mysqli_error($link));;
        if ($result) {

            $rows = mysqli_num_rows($result); // количество полученных строк
            if ($rows != 0) {
                echo "<script>alert(\"Извините,мы не смогли подобрать тур по таким параметрам,поэтому выводим туры подходящие по цене!\");</script>";
                echo "<br><br><table class='cl2' border='1'><tr><th>Номер</th><th>Название</th><th>Начало</th><th>Конец</th><th>Виза</th><th>Цена</th><th>Страна</th></tr>";
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
        }
    }
    }} }else {
        echo "<script>alert(\"Извините,что-то пошло не так!\");</script>";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Пройдите тест</title>
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
<div class="test">
    Добро пожаловать на сайт туристической фирмы "Вокруг света!"<br>
    Мы очень давно следим за тенденциями нашего бизнеса и разрабатываем <br>
    удобные сервисы для клиентов!Для того,чтобы минимизировать ваше время <br>
    для поиска тура у нас в фирме предлагаем вам ответить на ряд вопросов!После ваших ответов<br>
    наш электронный помощник подберёт вам ряд туров,подходящих именно для вас! С заботой,ваша команда!
</div>
<form action="" method="get">
<div class="question1">
    1.Выберите климат,в котором вы бы хотели отдохнуть?
    <select size="1" name="select1" id="select1" >
            <option selected value="Умеренный">Умеренный</option>
            <option value="Жаркий">Жаркий</option>
            <option value="Холодный">Холодный</option>
        </select>

</div>
<div class="question">
    2.Выберите ваши предпочтения:
   <select size="1" name="select2" id="select2">
            <option selected value="Горы">Горы</option>
            <option value="Море">Море</option>
            <option value="-">Не важно</option>
        </select>
</div>
<div class="question">
    3.Активный отдых или спокойный?
    <select size="1" name="select3" id="select3">
            <option selected value="Активный">Активный</option>
            <option value="Спокойный">Спокойный</option>
            <option value="Средний">Средний</option>
        </select>
</div>
<div class="question">
    4.Давайте определимся с вашим бюджетом:
    <select size="1" name="select4" id="select4">
            <option selected value="50000">До 50000</option>
            <option value="80000">До 80000</option>
            <option value="100000">До 100000</option>
            <option value="1000000">Я готов рассматривать любую цену</option>
        </select>



</div>
<div class="question">
    5.Путешествуете ли вы с детьми(до 12 лет)?:

        <select size="1" name="select5" id="select5">
            <option selected value="Да">Да</option>
            <option  value="Нет">Нет</option>
        </select><br>



</div>
<div class="question2">
    Вы ответили на все вопросы!Завершите опрос и мы подберём вам ваши туры!
    
<br>
        <button class="opr" type="submit">Завершить опрос!</button>

</div>
</form>
<br>
<br>
<br>
<!--<table class="table" border="1" cellpadding="5" cellspacing="0">
    <tr ><th colspan="3" class="zag">Наши контакты:</th>
    </tr>
    <tr>
        <td  height="20%" class="s">Наша ссылка в Instagram:    <a href="" class="ss">Instagram</a></td>


        <td  height="20%" class="s">Наша ссылка в Facebook:    <a href="" class="ss">Facebook</a></td>

        <td  height="20%" class="s">Наша ссылка в VK:    <a href="" class="ss">Вконтакте</a></td>
    </tr>
</table>-->
</body>
</html>
