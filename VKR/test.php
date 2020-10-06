<?php
$host='localhost';
$database='vkr2';
$user='root';
$password='123456789';
$table='comm';

$link=mysqli_connect($host,$user,$password,$database);
if($link)
    echo 'Соединение есть!';
else
    die(
    'Соединения нет!');
$name = htmlentities(mysqli_real_escape_string($link, $_POST['name']));
$number = htmlentities(mysqli_real_escape_string($link, $_POST['number']));
$adress = htmlentities(mysqli_real_escape_string($link, $_POST['adress']));

if($name=="" || $adress=="")
{
    echo '<script>';
echo 'alert("Проверьте введённые данные и повторите попытку!")';
echo '</script>';}
   /* header ('Location: index.php');}*/
else
{
    $query ="INSERT INTO comm VALUES('$name','$number','$adress')";
}

// создание строки запроса


// выполняем запрос
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{

    header ('Location: index2.html');  // перенаправление на нужную страницу
    exit();
}
/*
$query ="SELECT * FROM client";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result)
{
    echo "Выполнение запроса прошло успешно";
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table><tr><th>Id</th><th>Модель</th><th>Производитель</th></tr>";
    for ($i = 0 ; $i < $rows ; ++$i)
    {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 0 ; $j < 3 ; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    mysqli_free_result($result);

}*/

?>







