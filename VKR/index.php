
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Добро пожаловать!</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<li class="navbar-logo" href=""><img src="images/pic1.png"></li>
<nav>

    <ul class="top">

        <li><a href="about.html">О компании</a>
            <!--   <ul class="submenu">
           <li><a href="">История создания </a> </li>
           <li><a href="">Наши достижения</a> </li>
           <li><a href="">Наши спонсоры</a></li>

                </ul>-->
        </li>
       <!-- <li><a href="test.html">Подбор направления</a> </li>-->
        <li><a href="index.php"> Главная</a> </li>
      <!--  c<li><a href="contact.html"> Наши контакты</a> </li>-->
        <li><a href="contact.php"> Посмотреть туры</a> </li>
        <li><button class="login" ><a href="#openModal">Связаться с нами</a></button></li>
        <li><button class="login2" ><a href="#openModal2">Вход/Регистрация</a></button></li>
    </ul>
</nav>

<form class="form1" >
    <p><img src="images/people.png" >
        Добро пожаловать на главную страницу туристической фирмы "Вокруг света"!<br>
        Цель нашей компании:дарить людям впечатления на всю жизнь!<br>
        Мы предлагаем самые выгодные предложения для любого типа отдыха.Наша компания <br>
        делает людей счастливыми уже 20 лет! На нашем сайте вы можете ознакомиться с предлагаемыми турами,
        <br>нашими экскурсоводами,а так же подобрать путёвку по личному запросу!
    </p>

</form>

<form class="form2">

    <p><marquee behavior="alternate" bgcolor="red">НОВЫЕ ПРЕДЛОЖЕНИЯ!</marquee>

        Чехия-Австрия-Швейцария <br><br>
        <img src="images/form2.png"/>
        Длительность:6 дней<br>
        1 день:Сбор в Москве на Белорусском вокзале,перелёт,заселение в гостиницу в Праге<br>
        2 день:Завтрак,обзорная экскурсия по Праге,обед в кафе города,посещение Замка Леднице,ужин<br>
        3 день:Завтрак,выезд в Австрию,обед,обзорная экскурсия по Вене,заселение<br>
        4 день:Посещение Зальцбурга<br>
        5 день:Ранний выезд в Швецарию,посещение Юнгфрау<br>
        6 день:Свободное время,возвращение в Москву на Белорусский вокзал.<br>

        Цена:от 30000р.<br><br><br>

        Убуд,Бали <br><br>
        <img src="images/bali.png" width="320"/>
        Длительность:7 дней<br>
        1 день:Сбор в Москве на Белорусском вокзале,перелёт,заселение на виллу<br>
        2 день:Завтрак, экскурсия по окрестностям города<br>
        3 день-10 день:Свободное времяпрепровождение
        <br>
        4 день:Посещение леса обезъян <br>
        5 день:Посещение дворца в Убуде <br>
       6 день:Свободное время/сёрфинг <br>
       7 день:Свободное время,возвращение в Москву на Белорусский вокзал.<br>

        Цена:от 60000р.</p>
</form>
<table class="table" border="1" cellpadding="5" cellspacing="0">
    <tr ><th colspan="3" class="zag">Наши контакты:</th>
    </tr>
    <tr>
        <td  height="20%" class="s">Наша ссылка в Instagram:    <a href="" class="ss">Instagram</a></td>


        <td  height="20%" class="s">Наша ссылка в Facebook:    <a href="" class="ss">Facebook</a></td>

        <td  height="20%" class="s">Наша ссылка в VK:    <a href="" class="ss">Вконтакте</a></td>
    </tr>
</table>

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
                        Ваш логин:
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



                <form method="POST" class="modal-body1" id="modal-body1">
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
