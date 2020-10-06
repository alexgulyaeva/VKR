

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Администратор</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<li class="navbar-logo" href=""><img src="images/pic1.png"></li>
<nav>

    <ul class="top">


        <li><a href="adminsett.php">Настройки</a>

        </li>
        <li><button class="login2" ><a href="index.php">Выход</a></button>

        </li>




    </ul>
</nav>

<div class="tour">
<form class="addt" method="POST" id="addt" >
    <p class="k">Добавление тура:</p>
    <br>
        1.Название тура:<br>
        <input type="text" size="55" id="t1" name="t1"><br>
        2.Стоимость:<br>
        <input type="text" size="55" id="t2" name="t2"><br>
        3.Климат:
        <select size="1"  id="t3" name="t3" >
            <option selected value="Умеренный">Умеренный</option>
            <option value="Жаркий">Жаркий</option>
            <option value="Холодный">Холодный</option>
        </select><br>
        4.Можно ли с детьми:
    <select size="1" id="t4" name="t4">
        <option selected value="Да">Да</option>
        <option  value="Нет">Нет</option>
    </select><br>
    5.Начало:<br>
    <input type="date" size="55"  id="t5"  name="t5"><br>
    6.Окончание:<br>
    <input type="date" size="55" id="t6" name="t6"><br>
    7.Виза:<br>
    <input type="text" size="55" id="t7" name="t7"><br>
    8.Ландшафт:
    <select size="1" id="t8" name="t8">
        <option selected value="Горы">Горы</option>
        <option value="Море">Море</option>
        <option value="-">-</option>
    </select><br>
    9.Вид отдыха:
    <select size="1" id="t9" name="t9">
        <option selected value="Активный">Актинвый</option>
        <option value="Спокойный">Спокойный</option>
        <option value="Средний">Средний</option>
    </select><br>
    10.Номер транспортного средства:<br>
    <input type="text" size="55" id="t10" name="t10"><br>
    11.ФИО сопровождающего:<br>
    <input type="text" size="55" id="t11" name="t11"><br>
    12.Cтрана:<br>
    <input type="text" size="55" id="t12" name="t12"><br>
    <button class="addb" type="submit" onclick="add()">Добавить</button>
    </form>
</div>

<div class="deltour">

    <form class="addt" id="drop" method="POST">
       <p class="k"> Удаление тура:</p>
        <br>
        Введите номер тура:<br>
        <input type="text" size="55" name="droptour" id="drop">
        <button class="delb" type="submit" onclick="dropic()"> Удалить</button>

    </form>
          
</div>
<div class="deltour1">

    <form class="addt" method="POST" action="" id="update">

        <p class="k"> Изменение данных о туре:</p>
        <br>
        Введите название тура:<br>
        <input type="text" size="55" name="title" id="title"><br>

        Выберите,что нужно изменить:<br>
        <select size="1" id="fun" name="fun">
            <option selected value="title">Название</option>
            <option value="cost">Стоимость</option>
            <option value="st_date">Начало</option>
            <option value="ov_date">Окончание</option>
            <option value="id_bus">Транспорт</option>
            <option value="id_comp">Сопровождающий</option>
        </select><br>
        Изменить на:<br>
        <input type="text" size="55" id="znach" name="znach"><br>
       <p class="up"> (Дату окончания и начала тура нужно вводить в формате ГГГГ-ММ-ДД)</p>
        <button class="delb" type="submit" onclick="update()"> Изменить</button>
    </form>

</div>
<div class="deltour4">

    <form class="addt" id="addsopr" method="POST" action="">
        <p class="k"> Добавление сопровождающего:</p>
        <br>
        Имя сопровождающего:<br>
        <input type="text" size="55" name="namesopr" id="namesopr"><br>
        Образование:<br>
        <input type="text" size="55" name="studysopr" id="studysopr"><br>
        Стаж:<br>
        <input type="text" size="55" name="stazsopr" id="stazsopr"><br>
        <button class="delb" type="submit" onclick="checksopr()" >Добавить</button>

    </form>

</div>
<div class="deltour5">

    <form class="addt" id="addtrans" method="POST">
        <p class="k"> Добавление транспорта:</p>
        <br>
        Тип транспорта:<br>
        <select size="1" id="typetrans" name="typetrans">
            <option selected value="Автобус">Автобус</option>
            <option value="Автомобиль">Автомобиль</option>
            <option value="Микроавтобус">Микроавтобус</option>
        </select><br>
        Марка:<br>
        <input type="text" size="55" name="marka" id="marka"><br>
        Номер:<br>
        <input type="text" size="55" name="numbertrans" id="numbertrans"><br>
        <button class="delb" type="submit" onclick="addtrans()" >Добавить</button>


    </form>

</div>
<div class="deltour6">

    <form class="addt" id="drop" method="POST" action="blockclient.php">
        <p class="k"> Блокировка пользователя:</p>
        <br>
       Введите логин пользователя:<br>
        <input type="text" size="55" name="blockclient" id="blockclient"><br>
        <button class="delb" type="submit" >Заблокировать</button>


    </form>

</div>
<script>
    function checksopr()
    {
        $namesopr=document.getElementById('namesopr').value;
        $studysopr=document.getElementById('studysopr').value;
        $stazsopr=document.getElementById('stazsopr').value;
        if($namesopr=="" || $studysopr=="" || $stazsopr=="")
        {
            alert("Проверьте введённые данные!");
        }
        else
        {
            alert("Данные о сопровождающем добавлены в базу данных!");
            document.getElementById('addsopr').action='addsopr.php';
        }
    }

</script>
<script>
    function addtrans()
    {
        $typetrans=document.getElementById('typetrans').value;
        $marka=document.getElementById('marka').value;
        $numbertrans=document.getElementById('numbertrans').value;
        if($numbertrans=="" || $marka=="" )
        {
            alert("Проверьте введённые данные!");
        }
        else
        {
            alert("Данные о сопровождающем добавлены в базу данных!");
            document.getElementById('addtrans').action='addtrans.php';
        }
    }

</script>
<script>
    function add()
    {
        $title=document.getElementById('t1').value;
        $klimat=document.getElementById('t3').value;
        $child=document.getElementById('t4').value;
        $landscape=document.getElementById('t8').value;
        $active=document.getElementById('t9').value;
        if($title =="" || $klimat ==""|| $child==""|| $landscape==""|| $active==""){
            alert("Проверьте введённые данные!");

        }
        else
        {
            alert("Данные о туре добавлены в базу данных!");
            document.getElementById('addt').action='addtour.php';

        }
    }
</script>
<script>
    function dropic()
    {
        $drop1=document.getElementById('drop').value;

        if($drop1 == "" ){
            alert("Проверьте введённые данные!");

        }
        else
        {
            alert("Данные о туре удалены из базы данных!");
            document.getElementById('drop').action='droptour.php';

        }
    }
</script>
<script>
    function update()
    {
        $up1=document.getElementById('title').value;
        $up2=document.getElementById('fun').value;
        $up3=document.getElementById('znach').value;

        if($up1 == ""  ||$up3=="" ){
            alert("Проверьте введённые данные!");

        }
        else
        {
            alert("Данные о туре будут обновлены!");
            document.getElementById('update').action='updatetour.php';

        }
    }
</script>
</body>

</html>