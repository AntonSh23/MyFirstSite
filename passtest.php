<?php
    session_start();
    if (empty($_SESSION["user"])){echo "<script>alert('Вы должны зарегестрироваться или войти');</script>";
        header('Refresh: 0; URL=index.php');}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags
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
    <script rel="stylesheet" type="text/javascript" src="js/scripttest.js"></script>
    <link href="css/style.css" rel="stylesheet" />
    <style>
        div#test{ border:#000 1px solid; padding:10px 40px 40px 40px;  }
        div#testform{ padding: 35px 10px 0px 10px  ;}
    </style>
    <script>
        var pos = 0, test, test_status, question, choice, choices, chA, chB, chC, correct = 0;
        var questions = [
            [ "Синоніми наведено в рядку:", "зустрічати гостя – проводжати гостя", "жвавий хлопчина – прудкий хлопчина", "привозити подарунки – привезені подарунки", "будівельний кран – водопровідний кран", "B" ],
            [ "Фразеологічний зворот ужито в рядку:", "А мелодія лине, як дніпрова вода.", "Людська заздрість – гірша, як слабість.", "Ішов би робити, а не байдики бити!", "За Борисполем житом виспілим хоч які замилуються очі.", "C" ],
            [ "Складним є речення:", "Верби, схилившись над тихим Дінцем, розчісують коси зелені.", "На заході ще жевріло небо, а в степу вже заходила ніч.", "Липневий день мандрує пішки, казки нашіптує малечі.", "Пішла дорога то маленькими сосновими лісками, то болотами, то полями.", "B" ],
            [ "Не відмінюються всі слова рядка:", "бюро, журі, вікно", "кенгуру, турне, ательє", "тире, вапно, жалюзі", "графіті, інтерв’ю, колесо", "B" ]
        ];
        function _(x){
            return document.getElementById(x);
        }

        function __(z){
            return document.getElementsByClassName(z);;
        }


        function renderQuestion(){
            test = _("test");
            if(pos >= questions.length){
                test.innerHTML = "<h2>У вас "+correct+" правильных из "+questions.length+" вопросов</h2><br>";
                _("test_status").innerHTML = "Тест завершен, вы будете перенаправленны на страницу статистики прохождения теста";
                alert('Тест завершен!');
                document.getElementById("sss").style.width = "100%";
                var mark = encodeURIComponent(correct);
                window.location.href = 'statistics.php?mark='+mark;
                pos = 0;
                correct = 0;
                return false;
            }
            _("test_status").innerHTML = "Вопрос "+(pos+1)+" из "+questions.length;
            var progress = (pos*100)/questions.length;
            document.getElementById("sss").style.width = progress+"%";
            question = questions[pos][0];
            chA = questions[pos][1];
            chB = questions[pos][2];
            chC = questions[pos][3];
            chD = questions[pos][4];
            test.innerHTML = "<h3>"+question+"</h3>";
            test.innerHTML += "<input type='radio' name='choices' value='A'> "+chA+"<br>";
            test.innerHTML += "<input type='radio' name='choices' value='B'> "+chB+"<br>";
            test.innerHTML += "<input type='radio' name='choices' value='C'> "+chC+"<br>";
            test.innerHTML += "<input type='radio' name='choices' value='D'> "+chD+"<br><br>";
            test.innerHTML += "<button onclick='checkAnswer()'>Далее</button>";
        }
        function checkAnswer(){
            choices = document.getElementsByName("choices");
            for(var i=0; i<choices.length; i++){
                if(choices[i].checked){
                    choice = choices[i].value;
                }
            }
            if(choice == questions[pos][5]){
                correct++;
            }
            pos++;
            renderQuestion();
        }
        window.addEventListener("load", renderQuestion, false);

    </script>
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


<div id="testform">
    <h2 id="test_status"></h2>
    <div class="progress">
        <div id="sss" class="progress-bar" style="width: 0%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar">
            <span class="sr-only">60% Complete</span>
        </div>
    </div>
    <div id="test"></div>


</div>
</body>
</html>