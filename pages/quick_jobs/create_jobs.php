<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

          <div class='body ' style="margin-top: 90px;">
               <form class='login' style="padding-bottom: 70px;" action="../../includes/createJob.php" method='POST'>
                    <h3>Job</h3>
                     <input placeholder='e.g Slashing' type='text' name="post" />
                    <br>

                    <h3>Work Place</h3>
                      <input placeholder='e.g Something Bakery' type='text' name="loc" />
                    <br>

                    <h3>Job Location</h3>
                         <input placeholder='e.g Kampompo' type='text' name="post_job_loc" />
                    <br>
                    
                    <h3>Prefered Date</h3>
                         <input type="datetime-local" name="post_day">
                    <br>

                    <h3>Contact Information</h3>

                    <input placeholder='Contact Number' type='text' name="phone" />
                    <input placeholder='Contact Name' name='user_name' type='text' />

                    <button 
                    style="color: white;
                           padding: 10px;
                           margin-top: 10px; 
                           background-color: #636dff ;
                           border: none ; 
                           border-radius: 6px;
                           cursor: pointer;" 
                           name="submit"
                           type="submit">Post Job</button>

               </form>

               
               <div class='bottomNav'>
                    <a href='../home.php'>Home</a>
                    <a href='../../userAccount/profile.php'>Profile</a>
               </div>
          </div>

</body>

</html>