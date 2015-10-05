<?php
session_start();
header("Content-Type: text/html; charset=utf-8");
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Tests</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400;300' rel='stylesheet' type='text/css'>
    <link href='styletest.css' rel='stylesheet'>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="javascript/jquery-1.7.2.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script rel="stylesheet" type="text/javascript" src="js/script.js"></script>
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" type="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Главная страница</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="dropdown">
                    <a class="dropdown-toggle" aria-expanded="false" aria-haspopup="true" role="button" data-toggle="dropdown" href="#">
                        <?php if (empty($_SESSION["user"])){echo "Регистрация/Вход";}
                        else {echo $_SESSION["user"];}?>
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu">

                        <?php
                        switch(empty($_SESSION["user"])) {
                            case "0":echo ' <li>
                            <a href="logout.php">Выйти</a>
                        </li>';
                                break;
                            case "1":echo '<li>
                            <a href="register.php">Регистрация</a>
                        </li>

                        <li>
                            <a href="login.php">Вход</a>
                        </li>';
                                break;


                        }?>

                    </ul>
                </li>
                <li>
                    <a href="passtest.php">Пройти тест</a>
                </li>
                <li>
                    <a href="statistics.php">Результаты</a>
                </li>
                <li>
                    <a href="contact.php">Обратная связь</a>
                </li>

            </ul>
        </div>
    </div>
</nav>



<!--Jumbotron-->
<div class="jumHead">
    <div class="jumbotron">
        <div class="tit">
            Сдай УСПЕШНО ЗНО 2016!!!
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <a href='passtest.php'><h1>Пройди тест ЗНО онлайн у нас на сайте</h1> </a>

    </div>
</div>
<div class="container">
    <div class="row">
        <h2>С 2007 года по всей территории Украины образовательная
            система поменялась, и  начались ежегодные внешние
            независимые экзамены (ВНО). Все выпускники школ,
            гимназий и лицеев, без исключения, вынуждены сдавать
            итоговые тесты, по которым в дальнейшем и проводится
            набор в высшие учебные заведения. </h2>

        <p>
            Каждый абитуриент выбирает сам себе предметы,
            по которым он собирается сдавать ВНО (ЗНО). Но какой бы университет
            или институт выпускники не выбрали, им в обязательном порядке
            необходимо сдавать тесты по украинскому языку и литературе.
        </p>

        <p>
            (ЗНО) по украинскому языку и литературе считается самым тяжелым экзаменом, потому что включает в себя два предмета, творческое задание.
            В случаи неудовлетворительной отметки,
            шансы на поступление автоматически пропадают.
        </p>

        <p>
            Подготовка к ВНО (ЗНО) по украинскому языку
            должна быть очень результативной и качественной,
            потому что тестовые задания не легкие.
        </p>

        <h1>Мы предлагаем:</h1>

    </div>
</div>
<a name="Repetitor"> </a>
<div class="container">
    <div class="row">
        <div class="coll-offer">
            <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4"style="border:outset">
                Свяжись с нами прямо сейчас и получи Первый урок Бесплатно!!!<br> </br>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4" style="border: outset">
                Продуманные и результативные занятия нацеленные на результат<br> </br>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 col-lg-4" style="border: outset">
                Работа с квалифицированными проффесионалами, которые ПРОВЕРЯЮТ ЗНО.
            </div>
        </div>
    </div>
</div>
<h1>Почему именно мы?</h1>
<div id="brder">
    <div class="slider">

        <div class="slide active-slide">
            <div class="container">
                <div class="row">
                    <div class="slide-copy col-md-5 col-xd-12">
                        <h1>Мы повысим ВАШ шанс Успешно сдать ЗНО</h1>
                        <p>
                            Все наши предыдущие клинты Остались довольны, и мы исходя из опыта обучения,
                            можем смело заявить, что Мы повысим Ваш шанс УСПЕШНО сдать ЗНО на 50%
                        </p>
                    </div>
                    <div class="slide-img col-md-7 col-xs-12">
                        <img src="img/grafik-cen-na-zoloto.jpg" width="87%" style="padding-top: 5%">
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <div class="container">
                <div class="row">
                    <div class="slide-copy col-md-5 col-xd-12">
                        <h1>У нас работают проффесиональные репетиторы!</h1>
                        <p>
                            Наши репититоры неоднократно работали и работают в сфере проверки
                            ЗНО, то есть вы будете получать лучшие советы, от тех кто проверяет ЗНО
                        </p>

                    </div>
                    <div class="slide-img col-md-7 col-xs-12">
                        <img src="img/prof.jpg" width="87%" style="padding-top: 5%">
                    </div>
                </div>
            </div>
        </div>

        <div class="slide">
            <div class="container">
                <div class="row">
                    <div class="slide-copy col-md-5 col-xd-12">
                        <h1>Адекватная ценовая политика</h1>
                        <p>
                            У нас вы найдете, самые выгодные предложения, заказав сразу несколько занятий, выгодное Обучение - это у НАС.
                        </p>

                    </div>
                    <div class="slide-img col-md-7 col-xs-12">
                        <img src="img/1111.jpg" width="87%" style="padding-top: 5% ">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="slider-nav">
        <div class="arrow-prev">
            &lt;
        </div>
        <ul class="slider-dots">
            <li class="dot active-dot">
                &bull;
            </li>
            <li class="dot">
                &bull;
            </li>

            <li class="dot">
                &bull;
            </li>
        </ul>
        <div class="arrow-next">
            &gt;
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <a name="SelfEducation"> </a>
        <h1> Полезные материалы для самостоятельной подготовки к ЗНО</h1>
        <h2> Тесты прошлых годов:</h2>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="square">

            <div class="col-md-3">
                <h3><a href="files/ZNO_ukr_2015_baz.zip">ЗНО 2015</a></h3>
                <img src="img/zno.jpg" width="200px" height="200px"/>
            </div>
            <div class="col-md-3">
                <h3><a href="files/ZNO_ukr_2014_1.zip">ЗНО 2014</a></h3>
                <img src="img/zno.jpg" width="200px" height="200px"/>
            </div>
            <div class="col-md-3">
                <h3><a href="files/ZNO_ukr_2013_1.rar">ЗНО 2013</a></h3>
                <img src="img/zno.jpg" width="200px" height="200px"/>
            </div>
            <div class="col-md-3">
                <h3><a href="files/ZNO_ukr_2012_1.rar">ЗНО 2012</a></h3>
                <img src="img/zno.jpg" width="200px" height="200px"/>
            </div>
            <div class="col-md-3">
                <h3><a href="files/ZNO_ukr_2011_1.rar">ЗНО 2011</a></h3>
                <img src="img/zno.jpg" width="200px" height="200px"/>
            </div>
            <div class="col-md-3">
                <h3><a href="files/ZNO_ukr_2010_1.rar">ЗНО 2010</a></h3>
                <img src="img/zno.jpg" width="200px" height="200px"/>
            </div>
            <div class="col-md-3">
                <h3><a href="files/ZNO_ukr_2009.zip">ЗНО 2009</a></h3>
                <img src="img/zno.jpg" width="200px" height="200px"/>
            </div>
            <div class="col-md-3">
                <h3><a href="files/ZNO_ukr_2008.zip">ЗНО 2008</a></h3>
                <img src="img/zno.jpg" width="200px" height="200px"/>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="row">
        <h2> Учебные пособия:</h2>
    </div>
</div>
<div class="container">
    <div class="mid">
        <div class="row">

            <div class="RightPart">
                <div class="col-md-4">
                    <div class="Titles">
                        <h4>Пособие для подготовки учеников 11 классов к ЗНО по Украинскому языку и литературе 2014</h4>
                        <div class='descr'>

                            <img src="img/10005.jpg" width="95%">
                        </div>
                        <div class="description">
                            <p>
                                Матеріали для підготовки до ЗНО 2015 з української мови.  Шановні відвідувачі вашій увазі представляємо посібник ЗНО 2014 з української мови і літератури. Типові тестові завдання. Даний підручник буде корисним для учасників ЗНО з української мови  і літератури.

                                Якісна підготовка до ЗНО 2014.
                            <p>
                                У даний підручник типові тестові завдання ЗНО з української мови і літератури входить:
                            </p>
                            <ul>
                                <li>
                                    7 варіантів у форматі ЗНО
                                </li>
                                <li>
                                    відповіді до всіх тестових завдань
                                </li>
                                <li>
                                    відповідей зно з української мови і літератури
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="Titles">
                        <h4>Пособие для подготовки учеников 11 классов к ЗНО по Украинскому языку и литературе 2013</h4>
                        <div class='descr'>

                            <img src="img/11111122" width="95%">

                            <p>
                                Матеріали для підготовки до ЗНО 2015 з української мови.  Шановні відвідувачі вашій увазі представляємо посібник ЗНО 2014 з української мови і літератури. Типові тестові завдання. Даний підручник буде корисним для учасників ЗНО з української мови  і літератури.

                                Якісна підготовка до ЗНО 2014.
                            <p>
                                У даний підручник типові тестові завдання ЗНО з української мови і літератури входить:
                            </p>
                            <ul>
                                <li>
                                    7 варіантів у форматі ЗНО
                                </li>
                                <li>
                                    відповіді до всіх тестових завдань
                                </li>
                                <li>
                                    відповідей зно з української мови і літератури
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="Titles">
                        <h4>Пройди тест ЗНО онлайн:<br> </br></h4>
                        <div class='descr'>

                            <img src="img/zno.png" width="95%">
                        </div>
                        <div class="description">
                            <p>
                                На нашем сайте ты можешь проверить свои знания
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">

        <h2> При поступлении в высшие учебные заведения конкуренция среди абитуриентов
            становится всё жестче, а эффективность неизменной школьной программы постепенно снижается.
            Заботясь о будущем как детей, так и своем, рекомендуем обратить
            внимание на хорошего репетитора. На этой странице Вы сможете найти лучших репетиторов . </h2>

    </div>

</div>
<div id="footer">            <p>Созданный визуальный образ и услуги на данной демонстрационной версии компании приведены с учебной целью.</p>
</div>
</body>
</html>