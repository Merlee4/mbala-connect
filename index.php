<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="styles/all.css">

<?php
include_once 'includes/dbConfig.php';
session_start()

?>

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./styles/style.css">
     <title>Login</title>
</head>

<body>
     <div class="login-page">
          <div style="
          color: white;
          padding: 10px;
          font-size: 18;
          text-align: center;
          background-color: #636DFF">
               <p>Login</p>

          </div>

          <h2 style="margin-top: 15px; margin-bottom: 20px;">Welcome to Mbala Connect</h2>

          <form class="login" method="POST">

               <input placeholder='Email / Phone' name='email' type="text" required />
               <input placeholder='Password' name='password' type='password' required />
               <button name="submit" type="submit">Login</button>

          </form>

          <form method="POST">
               <button style="background-color: #777;margin-bottom:10px;" name="create">Create Account</button>
          </form>


     </div>

     <?php


          $fullUrl = 'http://'.$_SERVER["HTTP_HOST"].''.$_SERVER["REQUEST_URI"].'';
          if(strpos($fullUrl, 'created') == true){
               echo "<p style='
               background-color :rgba(41, 206, 91, 0.329);
               color: rgb(26, 61, 19);
               padding:20px;
               border-radius:4px;
               max-width:400px;
               text-align:center;
               margin:0 auto;'>You account have been created successfully</p>";
               exit();
          }

          
          if (isset($_POST['submit'])) {

               $login = $_POST['email'];
               $password = $_POST['password'];

               $sql = "SELECT user_names FROM users where user_pwd='$password' and user_email='$login' or user_phone='$login';";
               $result = mysqli_query($connect, $sql);
               $resultCheck = mysqli_num_rows($result);


               if ($resultCheck > 0) {
                    while ($rows = mysqli_fetch_assoc($result)) {
                         header('Location: pages/home.php?login=success');
                         $loggedUser = $rows['user_names'];
                         $_SESSION['name'] = $loggedUser;
                         $_SESSION['loggedIn'] = true;

                         if ($_SESSION['loggedIn'] == true) {
                              Header("Location: ./pages/home.php");
                         }
                    }
               }
          }
          if (isset($_POST['create'])) {
               header("Location: ./userAccount/create_account.php");
          }


     ?>
</body>

</html>
