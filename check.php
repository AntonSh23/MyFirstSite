<?php
session_start();
if ($_SESSION["user"]){
    header('URL=http://localhost/xdxdxd1234.ru/test.php');
}

else {
    echo 'u must be loggined';
}