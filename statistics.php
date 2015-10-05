<?php
    session_start();
    header("Content-Type: text/html; charset=utf-8");
    ini_set('display_errors', 0);
    if (empty($_SESSION["user"])){
        echo "<script>alert('Вы должны зарегестрироваться или войти');</script>";
        header('Refresh: 0; URL=index.php');}
    include_once "lib.php";
    if (!empty($_GET[mark])){
    $temp_mark = $_GET[mark];
    echo $temp_mark;
    create_new_test_pass($temp_mark);
        header('Refresh: 0; URL=statistics.php');
}
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
    <script rel="stylesheet" type="text/javascript" src="js/scripttest.js"></script>
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


<div class="container" style="padding-top: 50px">
    <div class="row">
        <?php echo_all_db_user_data(); ?>
    </div>
</div>


</body>