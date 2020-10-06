<?php
$select1 = $_POST['select1']; //klimat
$select2 = $_POST['select2']; //child
$select3 = $_POST['select3']; //landscape
$select4 = $_POST['select4']; //type otdix

$host='localhost';
$database='vkr';
$user='root';
$password='123456789';
$table='tour';

$link=mysqli_connect($host,$user,$password,$database);
if($link)
    echo 'Соединение есть!';
else
    die(
    'Соединения нет!');
$query ="SELECT id_tour,title,st_date,ov_date,visa,cost FROM tour WHERE (klim='$select1' AND child='$select2'AND landscape='$select3'and active='$select4')";
$result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
if($result) {
    echo "Выполнение запроса прошло успешно";
    $rows = mysqli_num_rows($result); // количество полученных строк

    echo "<table><tr><th>Номер</th><th>Название</th><th>Начало</th><th>Конец</th><th>Виза</th><th>Цена</th></tr>";
    for ($i = 0; $i < $rows; ++$i) {
        $row = mysqli_fetch_row($result);
        echo "<tr>";
        for ($j = 0; $j < 6; ++$j) echo "<td>$row[$j]</td>";
        echo "</tr>";
    }
    echo "</table>";

    // очищаем результат
    mysqli_free_result($result);
}
/*AND child='$select2' AND landscape='select3' and active='select4'*/
?>
