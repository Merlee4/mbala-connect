<?php
include_once "../../includes/dbConfig.php"
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Quick Jobs</title>
     <link rel="stylesheet" href="../../styles/style.css">
     <title>Quick Jobs</title>
</head>

<body>
     <div class='quickjobs'>
          <div style="
          color: white;
          padding: 10px;
          font-size: 18;
          text-align: center;
          background-color: #636DFF">
               <p>Quick Jobs</p>
          </div>


          <div class='buttons'>
               <a href='./quick_jobs.php'>Find Job</a>
               <a href='./create_jobs.php'>Create Job</a>
          </div>

          <div class='body'>
               
               <?php 
    

                    echo "<div style='color: #333; cursor:default;'>
                                   <div class='card view_card'>
                                        <h3>".$_POST["post_job"]."</h3>
                                        <p>".$_POST['post_loc']."</p>
                                   </div>
                                   <h3>".$_POST['post_day']."</h3>
                                   <div >
                                        <h3>Contact Information</h3>
                                        <ul>
                                             <li>".$_POST["post_name"]."</li>
                                             <li>".$_POST["post_phone"]."</li>
                                        </ul>
                                   </div>
                              </div>";


               ?>
           


               <div class='bottomNav'>
                    <a href='../home.php'>Home</a>
                    <a href='../../userAccount/profile.php'>Profile</a>
               </div>
          </div>


     </div>
</body>

</html>