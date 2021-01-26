<?php
include_once "../../includes/dbConfig.php";
session_start();
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
          <div class="header">
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
                    <a href='./create_jobs.php'> Create Job</a>
               </div>
          </div>




          <div class='body job_list'>

               <div class="quick">
                    <?php
                    $sql = "SELECT * FROM `posts`;";
                    $result = mysqli_query($connect, $sql);
                    $resultCheck = mysqli_num_rows($result);
                    
                    if (!$_SESSION['loggedIn']) {
                         echo "<p style='text-align:center;' class='card'>You need to have an account to view and Create Jobs</p>";
                    } else {
                         if ($resultCheck > 0) {
                              while ($rows = mysqli_fetch_assoc($result)) {
                                   echo '
                                        <form method="POST" action="./view_job.php" class="inputs">
                                             <input type="hidden" name="post_job" value="' . $rows["post_job"] . '"/>
                                             <input type="hidden" name="post_loc" value="' . $rows["post_loc"] . '"/>
                                             <input type="hidden" name="post_name" value="' . $rows["post_name"] . '"/>
                                             <input type="hidden" name="post_day" value="' . $rows["post_day"] . '"/>
                                             <input type="hidden" name="post_phone" value="' . $rows["post_phone"] . '"/>
                              
                                             <button href="../quick_jobs/view_job.php" style="color:"#333;" type="submit" class="indi">  
                                                  
                                                       <section>
                                                            <h3>' . $rows["post_job"] . '</h3>
                                                            <p style="font-weight:bold;">'.$rows["post_loc"].'</p>
                                                       </section>
                                                       <p style="color:#333;margin-top:10px;"><strong>Author<strong>: '.$rows["who_posted"].'</p>
                                                  
                                             </button>
                                        </form>
                                   ';
                              }
                         } else {
                              echo "<p class='card'>There Are No Jobs At the Moment</p>";
                         }
                    }
                    ?>

               </div>
               <div class='bottomNav'>
                    <a href='../home.php'>Home</a>
                    <a href='../../userAccount/profile.php'>Profile</a>
               </div>
          </div>


     </div>
</body>

</html>