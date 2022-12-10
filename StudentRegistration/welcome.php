<?php
include 'config.php';
session_start();
error_reporting(0);


if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
  }





if (isset($_POST["submit"])) {
   header("Location: PersonalDetails Form.php");
}



?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Homepage</title>
<link rel="stylesheet" type="text/css" href="css/homepage.css">
</head>

<body>
<div class="container">
   
    <div class="logo">
		<pre>      <img src="img/Uotlogo.png" class="Uotlogo" alt="" /></pre>

	</div>

    

	<br>
    <br>
    <br>
	<div class="heading">
        <center>
		<h1 style="font-size:50px;">STUDENT REGISTRATION PORTAL</h1>
</center>
	</div>
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
    <br>

<div class="pic1">
<div class="carousel">
      <div class="carousel_inner">
         <div class="carousel_item carousel_item__active">
            <img src="img/1 (1).jpg" alt="" class="carousel_img">
            
         </div>
         <div class="carousel_item">
            <img src="img/1 (2).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (3).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (4).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (5).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (6).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (7).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (8).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (9).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (10).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (11).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (12).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (13).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (14).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (15).jpg" alt="" class="carousel_img">
         </div>

         <div class="carousel_item">
            <img src="img/1 (16).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (17).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (18).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (19).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (20).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/1 (21).jpg" alt="" class="carousel_img">
         </div>
         <div class="carousel_item">
            <img src="img/mech.jpg" alt="" class="carousel_img">
         </div>
      </div>

      <div class="carousel_indicator">
         <button class="carousel_dot carousel_dot__active"></button>
         <button class="carousel_dot"></button>
         <button class="carousel_dot"></button>
      </div>

      <div class="carousel_control">
         <button class="carousel_button carousel_button__prev">
            <i class="fas fa-chevron-left"></i>
         </button>
         <button class="carousel_button carousel_button__next">
            <i class="fas fa-chevron-right"></i>
         </button>
      </div>
   </div>

   <script src="javascript/slideshowscript.js"></script>


</div> 
<div class="overflow">
<a  class="btn" href="PersonalDetails Form.php">Register Students</a>


    

</div>

</div>
</body>

<u style="color:grey"><center>copyright &copy peakyBlinders | 05/10/2022</center></u>
</html>