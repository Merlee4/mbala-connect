<?php

include_once 'dbConfig.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$locs = $_POST['locs'];
$password = $_POST['pswd'];

     
$sql = "UPDATE `users` SET `user_email` = 'sichenanks@mail.co' WHERE `users`.`user_id` = 16;";

mysqli_query($connect, $sql);

header('Location: ../index.php?created');




?>