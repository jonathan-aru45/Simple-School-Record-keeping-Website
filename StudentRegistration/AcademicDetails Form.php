<?php
include 'config.php';
session_start();
error_reporting(0);


if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
  }




if (isset($_POST["Submit"])) {
    $std_ID = mysqli_real_escape_string($conn, $_POST["std_ID"]);
  $dep = mysqli_real_escape_string($conn, $_POST["dep"]);
  $course = mysqli_real_escape_string($conn, $_POST["course"]);
  $ccode = mysqli_real_escape_string($conn, ($_POST["ccode"]));
  $yos = mysqli_real_escape_string($conn, ($_POST["yos"]));
  $sem1subs = mysqli_real_escape_string($conn, ($_POST["sm1subs"]));
  $sem2subs= mysqli_real_escape_string($conn, ($_POST["sm2subs"]));
  
 

    $sql = "UPDATE academic SET Department='$dep',Course='$course',CourseCode='$ccode',YearOfStudy='$yos',Sem1Subjects='$sem1subs',Sem2Subjects='$sem2subs' WHERE StudentID='$std_ID'";
    $result = mysqli_query($conn , $sql);

  if ($result) {
    $_POST["std_ID"] = "";
    $_POST["dep"] = "";
    $_POST["course"] = "";
    $_POST["ccode"] = "";
    $_POST["yos"] = "";
    $_POST["sm1subs"] = "";
    $_POST["sm2subs"] = "";

 
   
    echo "<script>alert('Academic Details Added Successfully');</script>";

     header("Location: LodgingDetails.php");
  }
   
else {
    echo "<script>alert('Adding Academic Details Failed');</script>";

}
 

}




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Details</title>
    
    
</head>
<body>
    <div class="container">
     <!---Linking the html document to the bootstrap css file-->
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
            <br>
            <nav>
      <main>
        <header>
        <img src="img/bplogo.png" alt="logo" id="bplogo" />
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
<br>
           

            <div id="info">
              <center>
                
                <h3 style="font-size:30px;" id="infor">Instructions</h3>
                <br>
                    <h4 style="font-size:20px;" id="note"> 
                    
                        This form is for the student's Academic details. Please fill the form carefully and correctly making
                    sure to cross check before submitting.

                    </h4>
                    <br>
                </center>  
            </div>
             <!--Creating divs to contain the forms-->
    <div class="formcontainer">
         <div class="adheader">

                 <h3 id="addetails">Academic Details</h3>
             </div>
            
                 <form  class="form" id="form"action="" method="post">
                    <!--Input field for Student ID-->
            <div class="form-control">
                <label for="stdID">Student ID</label>
          
                <input type="text" class="form-control" id="stdID" name="std_ID" placeholder="21302037"value="<?php echo $_POST["std_ID"];?>" required>
            </div>
            <br>
                       <!--Input field for Department-->
                       <div class="form-control">
                        <label for="dep">Department</label>
                      
                       <!--The 13 academic departments-->
                            <select id="dep" name="dep" >
                        <option value="Agriculture">Agriculture</option>
                        <option value="Applied Physics">Applied Physics</option>
                        <option value="Applied Sciences">Applied Sciences</option>
                        <option value="Architecture and Building">Architecture and Building</option>
                        <option value="Business Studies">Business Studies</option>
                        <option value="Civil Engineering">Civil Engineering</option>
                        <option value="Communications and Development">Communications and Development</option>
                        <option value="Electrical and Communication Engineering">Electrical and Communication Engineering</option>
                        <option value="Forestry">Forestry</option>
                        <option value="Mathematics and Computer Science" selected>Mathematics and Computer Science</option>
                        <option value="Mechanical Engineering">Mechanical Engineering</option>
                        <option value="Mining Engineering">Mining Engineering</option>
                        <option value="Surveying and Lands Studies">Surveying and Lands Studies</option>
                            
                       </select>
                     
                    </div>
                    <br>
                      <!--Input field for Course-->
                     <div class="form-control">
                         <label for="course">Course</label>
                         <input type="text" class="form-control" id="course"name="course"placeholder=" BSc. Computer Science"value="<?php echo $_POST["course"];?>" required>
                     </div>
                     <br>
                      <!--Input field for Course Code-->
                     <div class="form-control">
                         <label for="ccode">Course Code</label>
                         <input type="text" class="form-control" id="ccode" name="ccode" placeholder="BSCS/2"value="<?php echo $_POST["ccode"];?>" required>
                     </div>
                     <br>
                      <!--Input field for Year of Study-->
                     <div class="form-control">
                         <label for="yos">Year of Study</label>
                        
                             <select id="yos" name="yos" >
                             <option value="1">1</option>
                            <option value="2" selected>2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                     </div>
                     <br>
                      <!--Input field for Subjects in each semester-->
                     <div class="form-control">
                        <labe for="sm1subs">Semester 1 Subjects (Code: Subject Name)</label>
                            <br>
                            <textarea id="sm1subs" name="sm1subs"
                            placeholder="
                            CS210-Programming III
                            CS211-Networking I
                            CS212-Database I
                            CS213-Concepts of Computer Science
                            "
    
                            
                            ></textarea>
                     </div>
                     <br>
                     <div class="form-control">
                        <labe for="sm2subs">Semester 2 Subjects (Code: Subject Name)</label>
                            <br>
                            <textarea id="sm2subs" name="sm2subs"   placeholder="
                            CS220-Programming IV
                            CS221-Applied Statistics
                            CS222-Internet Programming I
                            CS223-Operating Systems
                            " ></textarea>
                     </div>
                     <br>
    
                  
                 
                     <input type="submit" class="btn"  name="Submit" value="Submit" />
 
                </form>
              

         <div>
 
          <small> &copy;Sexy Blinders </small>
         </div>


       
       

       


<!--
   
    <div class="bottomdiv">
        <h1>THis is the bottom div</h1>
       
       
           </div> 
       
 
        -->

        </div>
</div>
</div>
    
</body>

</html>