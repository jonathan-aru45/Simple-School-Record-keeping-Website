<?php
include 'config.php';
session_start();
error_reporting(0);


if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
  }






?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessfully Added Student Records</title>
    
    
</head>
<body>
    <div class="container">
     <!---Linking the html document to the css file-->
     <link rel="stylesheet" type="text/css" href="css/Mainstylesheet.css">
     
    
        
        
       
        <div class="headingclass">
        <div class="logoclass">
    
            
    <div class="logo">
    
            <pre> <img src="img/Uotlogo.png" class="Uotlogo" alt="" /></pre> 
    </div>

</div>
           

            <h1 style="font-size:50px;">STUDENT REGISTRATION PORTAL</h1>
            <br>
            <br>
            <br>
            <br>
            <br>

            <nav>
      <main>
        <header>
        <img src="img/bplogo.png" alt="logo" />
         <!-- <img src="./src/logo.svg" alt="logo" /> -->
          <i class="fa fa-bars" aria-hidden="true"></i>
        </header>
        <ul class="menu">
        <li>
            <a href="welcome.php">Home       </a>
          </li>
        <li>
            <a href="PersonalDetails Form.php">Personals Form</a>
          </li>
          <li>
            <a href="AcademicDetails Form.php">Academics Form</a>
          </li>
          <li>
            <a href="LodgingDetails.php">Lodging Details Form</a>
          </li>
          <li>
            <a href="ViewPersonalDetails.php">Personal Records</a>
          </li>
          <li>
            <a href="ViewAcademicDetails.php"> Academic Records</a>
          </li>
          <li>
            <a href="ViewLodgingDetails.php"> Lodging Records</a>
          </li>
          <li>
            <a href="logout.php">Log out</a>
          </li>
        </ul>
      </main>
    </nav>

            <div id="info">
                <br>
              <center>
                <h3 style="font-size:30px;" id="infor">You have sucessfully registered a student</h3>
                <br>
                    <h4 style="font-size:20px;" id="note" color="white"> 
                        Choose below whether you want to go back to the home page, view registered students' details, or logout. If you want to view student records, you have 3 records to view,
                        You can view either the personal details of students, their academic details or their lodging and mess details.
                    </h4>
                </center>  
            </div>
            <br>
            <br>
            <div class="overflow">
              <center>
<a  class="btn" href="welcome.php">Return Home</a>
<br>
<a  class="btn" href="ViewPersonalDetails.php">View Student Personal Records</a>
<br>
<a  class="btn" href="ViewAcademicDetails.php">View Academic Records</a>
<br>
<a  class="btn" href="ViewLodgingDetails.php">View Lodging Records</a>

              </center>
    

</div>
            
             
            

            </div>


       
       

       


<!--
   
    <div class="bottomdiv">
        <h1>THis is the bottom div</h1>
       
       
           </div> 
       
 
        -->

        </div>
    
    
</body>

</html>