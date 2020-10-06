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
$name = htmlentities(mysqli_real_escape_string($link, $_POST['namef']));
$number = htmlentities(mysqli_real_escape_string($link, $_POST['password']));


    $query = "SELECT count(*) FROM client where login='$name'";
    $result = mysqli_query($link, $query) or die("Ошибка " . mysqli_error($link));
    $row = mysqli_fetch_row($result);
    if ($row[0] > 0) {
        // Есть данные

         $query1 = "SELECT password FROM client where login='$name'";
    $result1 = mysqli_query($link, $query1) or die("Ошибка " . mysqli_error($link));
        $row = mysqli_fetch_row($result1);
        $query1 = "SELECT name FROM client where login='$name'";
        $result1 = mysqli_query($link, $query1) or die("Ошибка " . mysqli_error($link));
        $rows = mysqli_fetch_row($result1);

        if($row[0]!=$number)
        {

            header ('Location: index.php');
            exit();
        }
        else
        {
            if($rows[0]==" admin")
            { session_start();
                $_SESSION['name']=$rows[0];

                header ('Location: admincab.php');
                exit();
            }
            else
            {
                session_start();
                $_SESSION['name']=$rows[0];


                header ('Location: clientcab.php');
                exit();
            }
        }


    } else {
        // нет данных
        echo 'Записи нет!';
    }

?>
