<?php
  

if(isset($_POST['submit'])){
     include_once 'dbConfig.php';

     $name = mysqli_real_escape_string($connect,$_POST['name']);
     $email = mysqli_real_escape_string($connect,$_POST['email']);
     $phone = mysqli_real_escape_string($connect,$_POST['phone']);
     $locs = mysqli_real_escape_string($connect,$_POST['locs']);
     $password = mysqli_real_escape_string($connect,$_POST['pswd']);

     $CheckSql = "SELECT * FROM `users` WHERE user_phone='$phone' and user_names='$name';";
     $Check = mysqli_query($connect, $CheckSql);
     $CheckResult = mysqli_num_rows($Check);

     if($CheckResult >= 1){
           Header("Location: ../userAccount/create_account.php?account=exists");
     }else{
     
          if(empty($name) || empty($phone) || empty($password) || empty($locs)){
     
               Header("Location: ../userAccount/create_account.php?signup=empty");
               
          }else{
               $sql = "INSERT INTO `users` (`user_names`, `user_email`, `user_phone`, `user_location`, `user_pwd`, `user_id`) 
               VALUES ('$name', '$email', '$phone', '$locs', '$password', NULL);";
     
               mysqli_query($connect, $sql);
     
               header('Location: ../index.php?created');
          }
     }

     



   

     
}else{
     Header("Location: ../index.php?signup=error");
}
