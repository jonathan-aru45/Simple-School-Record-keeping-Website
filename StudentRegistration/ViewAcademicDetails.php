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
    <title>Academic Details Records</title>
    
    
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
                <h3 style="font-size:30px;" id="infor">Academic Details of registered Students</h3>
                <br>
                    <h4 style="font-size:20px;" id="note"> 

                        The following table contains the Academic details of registered students. This includes, the department they belong to, the course they are taking,
                        the Year of study and subjects.
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
                        <th>Gender</th>
                        <th>Department</th>
                        <th>Course</th>
                        <th>Course Code</th>
                        <th>YearofStudy</th>
                        <th>Sem1Subjects</th>
                        <th>Sem2Subjects</th>
                       
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

                $sql="SELECT StudentID,FirstName,LastName,Gender,Department,Course,CourseCode,YearOfStudy,Sem1Subjects,Sem2Subjects FROM academic";
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
                        <td>".$row["Gender"]."</td>
                        <td>".$row["Department"]."</td>
                        <td>".$row["Course"]."</td>
                        <td>".$row["CourseCode"]."</td>
                        <td>".$row["YearOfStudy"]."</td>
                        <td>".$row["Sem1Subjects"]."</td>
                        <td>".$row["Sem2Subjects"]."</td>
                       

                </tr>";
                }
                
                
                ?>
                    
                    

                    
                </tbody>




            </table>
             
            

            </div>


       
       

       


<!--
   
    <div class="bottomdiv">
        <h1>THis is the bottom div</h1>
       
       
           </div> 
       
 
        -->

        </div>
    
    
</body>

</html>