<?php

session_start();

include_once 'dbConfig.php';

$post_job = mysqli_real_escape_string($connect,$_POST['post']);
$post_loc = mysqli_real_escape_string($connect,$_POST['loc']);
$post_job_loc = mysqli_real_escape_string($connect,$_POST['post_job_loc']);
$post_day = mysqli_real_escape_string($connect,$_POST['post_day']);
$post_name = mysqli_real_escape_string($connect,$_POST['user_name']);
$post_phone = mysqli_real_escape_string($connect,$_POST['phone']);


$who_posted = $_SESSION['name'];

$sql = "INSERT INTO `posts` (`post_job`, `post_loc`, `post_job_loc`, `post_day`, `post_name`, `post_phone`, `id` , `who_posted`) VALUES ('$post_job', '$post_job_loc', '$post_loc', '$post_day', '$post_name', '$post_phone', NULL, '$who_posted');";

mysqli_query($connect, $sql);

header('Location: ../pages/quick_jobs/created.php?post=sucess');

?>