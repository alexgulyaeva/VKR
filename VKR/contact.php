<?php
error_reporting(0);
$host = 'localhost';
$database = 'vkr2';
$user = 'root';
$password = '123456789';
$table = 'tour';

$link = mysqli_connect($host, $user, $password, $database);
if ($link) {
    $query = "SELECT id_tour,name,st_date,ov_date,visa,cost,country FROM tour ";
    $result = mysqli_query($link, $query);
    if ($result) {

        $rows = mysqli_num_rows($result); // количество полученных строк
        if ($rows != 0) {
            echo "<table class='cl3' border='1'><tr><th>Номер</th><th>Название</th><th>Начало</th><th>Конец</th><th>Виза</th><th>Цена</th><th>Страна</th></tr>";
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
    <title>Просмотр туров</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<li class="navbar-logo" href=""><img src="images/pic1.png"></li>
<nav>

    <ul class="top1">

        <li><a href="about.html">О компании</a>
            <!--   <ul class="submenu">
           <li><a href="">История создания </a> </li>
           <li><a href="">Наши достижения</a> </li>
           <li><a href="">Наши спонсоры</a></li>

                </ul>-->
        </li>

        <li><a href="index.php"> Главная</a> </li>
        <!--  c<li><a href="contact.html"> Наши контакты</a> </li>-->
        <li><a href="contact.php"> Посмотреть туры</a> </li>
        <li><button class="login" ><a href="#openModal">Связаться с нами</a></button></li>
        <li><button class="login2" ><a href="#openModal2">Вход/Регистрация</a></button></li>
    </ul>
</nav>
<div class="tours">
    На этой странице Вы можете просмотреть все туры,которые предлагает наша компания!<br>

</div>
<div id="openModal" class="modal">
    <div class="modal-dialog2">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Оставьте свои контакты,чтобы мы могли с вами связаться!Будьте внимательны,
                    поля 1 и 3 должны быть заполнены обязательно!<br>
                </h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body3">
                <form method="POST" id="form" >
                    <div class="regis">
                        1.Ваше имя и фамилия:
                        <input type="text" size="60" name="name" id="name">
                    </div>
                    <div class="regis" >
                        2.Контактный телефон:
                        <input type="text" size="60" name="number" id="number">
                    </div>
                    <div class="regis">
                        3.Адрес электронной почты:
                        <input type="text" size="60" name="adress" id="adress">
                    </div>
                    <div class="regis">
                        <button class="reg1" onclick="prov()" >Хорошо,буду ждать звонка</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
<script>
    function prov()
    {
        named=document.getElementById('name').value;
        adressic=document.getElementById('adress').value;

        if(named=="" || adressic=="")
        {
            alert("Вы не заполнили поля!");
        }
        else
        {
            document.getElementById('form').action='test.php';
        }
    }

</script>

<div id="openModal2" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title">Для того,чтобы вам открылось больше функций войдите или зарегистрируйтесь!</h3>
                <a href="#close" title="Close" class="close">×</a>
            </div>
            <div class="modal-body">
                <form method="POST"  class="modal-body2" id="modal-body2" >
                    <div class="regis1">
                        Войдите,если у Bас есть учетная запись:

                    </div>
                    <div class="all">
                        <div class="regis">
                            Ваше логин:
                            <input type="text" size="50" name="namef" id="namev">
                        </div>
                        <div class="regis" >
                            Пароль:
                            <input type="password" size="50" name="password" id="password">
                        </div>
                        <div class="regis">
                            <button class="reg" type="submit" onclick="prov_vxod()" >Войти</button>
                        </div>
                    </div>

                </form>



                <form method="POST" class="modal-body14" id="modal-body1">
                    <div class="regis1">
                        Зарегистрируйтесь,если у Bас еще нет учётной записи:
                    </div>
                    <div class="all">
                        <div class="regis">
                            Ваше ФИО:
                            <input type="text" size="50" name="namer" id="namer">
                        </div>
                        <div class="regis">
                            Ваш логин:
                            <input type="text" size="50" name="login" id="login">
                        </div>
                        <div class="regis">
                            Ваш адрес электронной почты:
                            <input type="text" size="50" name="adressr" id="adressr">
                        </div>
                        <div class="regis">
                            Ваш контактный телефон:
                            <input type="text" size="50" name="numberr" id="numberr">
                        </div>
                        <div class="regis" >
                            Пароль:
                            <input type="password" size="50" name="password1" id="password1">
                        </div>
                        <div class="regis" >
                            Повторите пароль:
                            <input type="password" size="50" id="password2">
                        </div>
                        <div class="regis">
                            <button class="reg" type="submit" onclick="reg_prov()" >Зарегистрироваться</button>
                        </div>
                    </div>
                </form>



            </div>
        </div>
    </div>
    <script>
        function prov_vxod(){
            $name = document.getElementById('namev').value;
            $password = document.getElementById('password').value;
            if($name==""||$password=="")
            {
                alert("Введите имя пользователя и пароль!");
            }
            else
            {
                document.getElementById('modal-body2').action='admin.php';
            }}
    </script>
    <script>
        function reg_prov()
        {
            $name = document.getElementById('namer').value;
            $adress=document.getElementById('adressr').value;
            $number =document.getElementById('numberr').value;
            $password1=document.getElementById('password1').value;
            $password2=document.getElementById('password2').value;
            $login=document.getElementById('login').value;
            if($name=="" || $adress=="" || $number=="" || $password1==""||$password2==" " || $login=="")
            {
                alert("Проверьте введённые данные!Все поля должны быть заполненны");
            }
            else
            {
                if($password1==$password2)
                {
                    document.getElementById('modal-body1').action='addclient.php';
                }
                else
                {
                    alert("Проверьте пароль!Он должен совпадать!");
                }
            }

        }
    </script>
    <script>
        function admin()
        {
            if((document.getElementById("name").value == "admin") && (document.getElementById("number").value == "admin"))
            {

                window.open("admin.html");

            }
            else
            {
                document.location = "admin.html";
            }
        }
    </script>
</body>
</html>
