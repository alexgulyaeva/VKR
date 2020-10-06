<?php
session_start();
$name=$_SESSION['name'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Настройки аккаунта</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<li class="navbar-logo" href=""><img src="images/pic1.png"></li>
<nav>

    <ul class="top">


        <li><a href="">Забронировать тур</a> </li>
        <li><a href="test1.php">Подобрать тур</a> </li>
        <li><a href="">Настройки</a> </li>
        <li><a href="clientcab.php">Личный кабинет</a> </li>
        <li><button class="login2" ><a href="index.php">Выход</a></button></li>
    </ul>
</nav>
<div class="tour">
    <form class="addt" method="POST" id="addt" action="" >
        <p class="k">Изменение пароля:</p>
        <br>
        1.Введите пароль:<br>
        <input type="password" size="55" id="t1" name="t1"><br><br>
        2.Повторите пароль:<br>
        <input type="password" size="55" id="t2" name="t2"><br><br>
        <button class="addb" type="submit" onclick="change()">Изменить</button>
    </form>
</div>
<div class="delacc">

    <form class="addt" id="drop" method="POST" action="delacc.php">
        <p class="k"> Удаление аккаунта:</p>
        <br>
        <button class="dela" type="submit" > Удалить</button>

    </form>

</div>
<div class="delacc1">

    <form class="addt" id="dropf" method="POST">
        <p class="k"> Изменение логина:</p>
        <br>
        Введите новый логин:<br>
        <input type="text" size="55" name="namef" id="drop">
        <button class="delb" type="submit" onclick="update()" > Изменить</button>

    </form>

</div>
<script>
    function change()
    {
$t12=document.getElementById('t1').value;
    $t22=document.getElementById('t2').value;
    if($t12!="")
    {
        if($t12==$t22){
            alert("Пароль будет изменён!");
            document.getElementById('addt').action='changeuser.php';
        }
        else
        {
            alert("Проверьте введённые данные!");
        }
    }
    else
    {
        alert("Проверьте введённые данные!");
    }
    }

</script>
<script>
    function update()
    {
        $new=document.getElementById('drop').value;

        if($new!="")
        {

                alert("Логин будет изменён!");
                document.getElementById('dropf').action='updatename.php';

        }
        else
        {
            alert("Проверьте введённые данные!");
        }
    }

</script>
</body>
</html>
