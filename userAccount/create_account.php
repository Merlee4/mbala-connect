<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../styles/style.css">
     <title>Create Account</title>
</head>

<body>
     <div class='login-page'>
          <div style="
          color: white;
          padding: 10px;
          font-size: 18;
          text-align: center;
          background-color: #636DFF">
               <p>Create Account</p>
          </div>

          <form class='login' action="../includes/createUser.php" method="POST">
               <input placeholder='Full Names' name="name" type='text' />
               <input placeholder='Email' type='email' name="email" />
               <input placeholder='Phone Number' type='text' name="phone" />
               <input placeholder='Residential Adress'  type='text' name="locs" />
               <input placeholder='Password' type='password' name="pswd"/>

               <button name="submit" type="submit">Create Account</button>
               
               <p style="margin-top: 20px;">Already have an Account?
                    <a href='../index.php'>Login</a>
               </p>

          </form>
          <?php
                     
                    $fullUrl = 'http://'.$_SERVER["HTTP_HOST"].''.$_SERVER["REQUEST_URI"].'';
                    if(strpos($fullUrl, "signup=empty") == true){
                         echo "<p style='
                         color:red;
                         background-color: rgba(206, 41, 41, 0.329);
                         color: rgb(85, 30, 30);
                         padding:20px;
                         border-radius:4px;
                         max-width:300px;
                         margin:0 auto;'>You did not fill the required fields   </p>";
                         exit();
                    }
                    if(strpos($fullUrl, "account=exists") == true){
                         echo "<p style='
                         color:red;
                         background-color: rgba(206, 41, 41, 0.329);
                         color: rgb(85, 30, 30);
                         padding:20px;
                         border-radius:4px;
                         max-width:300px;
                         margin:0 auto;'>You Already have</p>";
                         exit();
                    }
          
               ?>

     </div>
</body>

</html>