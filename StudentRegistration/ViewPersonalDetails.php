<?php

use LDAP\Result;

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
    <title>Personal Details Records</title>
    
    
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
                <h3 style="font-size:30px;" id="infor">Personal Details of registered Students</h3>
                <br>
                    <h4 style="font-size:20px;" id="note"> 
                        The following table contains the personal details of registered students. This includes , student ID, First Name, Last Name and so on.
                    </h4>
                </center>  
            </div>
            <br>

            <table class="table">
                <thead>
                   
                         <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>D.O.B</th>
                        <th>Gender</th>
                        <th>Marital Status</th>
                        <th>Home Province</th>
                        <th>Religion</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                       
                        </tr>
                       </thead>
                <tbody>
                <?php
                $hostname='localhost';
                $username='root';
                $password='';
                $database='studentregistration';
                
                //creating connection to database
                $conn=mysqli_connect($hostname,$username,$password,$database)
                or die("Database connection failed");

                //Read rows from personal_details table in StudentRegistration Database

                $sql="SELECT StudentID,FirstName,LastName,Dob,Gender,MaritalStatus,HomeProvince,Religion,PhoneNo,Email FROM personal_details";
                $result=$conn->query($sql);

                if(!$result){
                    die("Invalid Query: ". $conn->error);
                }
                //read data from each row
                while($row=$result->fetch_assoc()){
                    echo"<tr>
                        <td>".$row["StudentID"]."</td>
                        <td>".$row["FirstName"]."</td>
                        <td>".$row["LastName"]."</td>
                        <td>".$row["Dob"]."</td>
                        <td>".$row["Gender"]."</td>
                        <td>".$row["MaritalStatus"]."</td>
                        <td>".$row["HomeProvince"]."</td>
                        <td>".$row["Religion"]."</td>
                        <td>".$row["PhoneNo"]."</td>
                        <td>".$row["Email"]."</td>
                       

                </tr>";
                }
                
                
                ?>
                    
                    

                    
                </tbody>




            </table>
             
            

            </div>


       

        </div>
    
    
</body>

</html>