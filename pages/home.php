<?php
session_start();
include_once "../includes/dbConfig.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../styles/style.css">
     <link rel="stylesheet" href="../styles/all.css">
     <title>Home</title>
</head>

<body>
     <div>
          <div style="
               color: white;
               padding: 10px;
               font-size: 20;
               text-align: center;
               background-color: #636DFF;
               display:flex">

               <p style="flex: 1;">Home</p>
          </div>

          <div class='body'>
               <?php
                 if (!$_SESSION['loggedIn']) {
                         echo '
                         <p style="text-align:center;">You are not logged in <strong><a href="../index.php">Click here</a></strong> to sign</p>';

                 }else{
                    echo ('
                        
                         <div class="welcome">
                              <h3 >
                                   <a href='.
                                          "../userAccount/profile.php"
                                        .'>       
                                                  <h3 style="color:#333;">Welcome</h3>

                                                  <span style="color":#333;"> '.$_SESSION["name"].'</span>
                                                  <form method="POST" class="logout">
                                                       <button 
                                                            class="logout-button"
                                                            name="logout"
                                                            type="submit"
                                                            >Logout</button>

                                                  </form>
                                                  
                                        
                                        </a>
                               <h3>
                          </div>'
                         
                    );
                 }
          
               
               ?>
            


               <a href='./quick_jobs/quick_jobs.php' style=" color: #333;">
                    <div class='card'>
                         <h1>Quick jobs</h1>
                         <p>Jobs Available :
                              <?php
                                   $sql = "SELECT * FROM `posts`;";
                                   $result = mysqli_query($connect, $sql);
                                   $resultCheck = mysqli_num_rows($result);
                                   if (!$_SESSION['loggedIn']) {
                                        echo '<strong>'.$resultCheck.'</strong>';
                                   }else{
                                        echo '<strong>'.$resultCheck.'</strong>';
                                   }
                                    
                                  
                              ?>
                         </p>
                    </div>
               </a>
          </div>

          <div class='bottomNav'>
               <a href='home.php'>
                    Home
               </a>
               <a href='../userAccount/profile.php'>
                    Profile
               </a>
          </div>
     </div>
     <?php
          if (isset($_POST['logout'])) {

               $_SESSION['loggedIn'] = false;
               Header("Location: ../index.php");
          }
     ?>

</body>

</html>