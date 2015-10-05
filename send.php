<?php
ini_set('display_errors', 0);
session_start();
header("Content-Type: text/html; charset=utf-8");
$subject = "Feedback from my demo site";
$to = "notan.vokepluhs@gmail.com";
$message = $_POST["message"];
$user = $_SESSION["user"];
$headers = "From user" . $user;
mail($to, $subject ,$message, $headers);
header('Refresh: 0; URL=index.php')
?>

<script>alert("Ваше сообщение отправленно, спасибо за помощь!")</script>
