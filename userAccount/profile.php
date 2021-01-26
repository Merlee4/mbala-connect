<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="../styles/style.css">
     <title>My Profile</title>
</head>

<body>
     <div style="
          color: white;
          padding: 10px;
          font-size: 18;
          text-align: center;
          background-color: #636DFF">
          <p>My Profile</p>
     </div>

     <div class="body">

          <?php
               echo '
                    
               <form>
                    <h1>'.session_status() > 0 ?$_SESSION['name'] : "".'</h1>
                    <h3>Name</h3>
                    <div class="edit_name">
                         <input name="new_names" />
                         <button>Edit</button>
                    </div>
                
               </form>
               '
          
          ?>
     </div>

     <div class='bottomNav'>
          <a href='../pages/home.php'>
               Home
          </a>
          <a href='../userAccount/profile.php'>
               Profile
          </a>
     </div>


  
</body>

</html>