
<?php
include 'config.php';
session_start();
error_reporting(0);


if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
  }





if (isset($_POST["submit"])) {
  $stdID = mysqli_real_escape_string($conn, $_POST["stdID"]);
  $fname = mysqli_real_escape_string($conn, $_POST["firstName"]);
  $lname = mysqli_real_escape_string($conn, ($_POST["lastName"]));
  $d_ob = mysqli_real_escape_string($conn, ($_POST["dob"]));
  $pdgender = mysqli_real_escape_string($conn, $_POST["gender"]);
  $pdmstat = mysqli_real_escape_string($conn, $_POST["maritalStat"]);
  $pdprov = mysqli_real_escape_string($conn, ($_POST["hprovince"]));
  $pdreligion = mysqli_real_escape_string($conn, ($_POST["religion"]));
  $pdphone = mysqli_real_escape_string($conn, ($_POST["pno"]));
  $pdemail = mysqli_real_escape_string($conn, ($_POST["email"]));
 

  $check_stdID = mysqli_num_rows(mysqli_query($conn, "SELECT StudentID FROM personal_details WHERE StudentID='$stdID'"));
 
  if ($check_stdID > 0) {
    echo "<script>alert('Student with this ID already exists');</script>";
  } else {
    $sql = "INSERT INTO personal_details (StudentID,FirstName,LastName,Dob,Gender,MaritalStatus,HomeProvince,Religion,PhoneNo,Email) VALUES ('$stdID', '$fname', '$lname','$d_ob','$pdgender','$pdmstat','$pdprov','$pdreligion','$pdphone','$pdemail')";
    $sql2 = "INSERT INTO academic (StudentID,FirstName,LastName,Gender) VALUES ('$stdID', '$fname', '$lname','$pdgender')";
    $sql3 = "INSERT INTO lodging (StudentID,FirstName,LastName,Gender) VALUES ('$stdID', '$fname', '$lname','$pdgender')";
    
    $result1 = mysqli_query($conn , $sql);
    $result2 = mysqli_query($conn , $sql2);
    $result3=mysqli_query($conn , $sql3);
    
}
  if ($result1) {
    $_POST["stdID"] = "";
    $_POST["firstName"] = "";
    $_POST["lastName"] = "";
    $_POST["dob"] = "";
    $_POST["gender"] = "";
    $_POST["maritalStat"] = "";
    $_POST["hprovince"] = "";
    $_POST["religion"] = "";
    $_POST["pno"] = "";
    $_POST["email"] = "";
   
    if($result2){
      $_POST["stdID"] = "";
    $_POST["firstName"] = "";
    $_POST["lastName"] = "";
   
    $_POST["gender"] = "";


    }
    if($result3){
      $_POST["stdID"] = "";
      $_POST["firstName"] = "";
      $_POST["lastName"] = "";
     
      $_POST["gender"] = "";
      echo "<script>alert('Sucessfully added Personal Details');</script>";

      if($result3){
        $_POST["stdID"] = "";
        $_POST["firstName"] = "";
        $_POST["lastName"] = "";
       
        $_POST["gender"] = "";
        header("Location: AcademicDetails Form.php");
  
      }

    }
  
}
else{
  echo "<script>alert('Adding Personal Details Failed. Please try again');</script>";

}
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Details</title>
    
    
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
<br>
            <div id="info">
              <center>
                <h3 style="font-size:30px;" id="infor">Instructions</h3>
                    <h4 style="font-size:20px;" id="note"> 
                    <br>
                        This form is for the student's personal details. Please fill the form carefully and correctly making
                    sure to cross check before submitting.

                    </h4>
                </center>  
            </div>
            <br>
             <div class="formcontainer"> 
             <div class="pdheader">
 
       
 <!--Heading-->
    
        <h3>Personal Details</h3>
    </div>
   
        <form class="form" id="form" action="#" method="post">
              <!--Input field for Student ID-->
            <div class="form-control">
                <label for="stdID">Student ID</label>
              <i class="fas fa-user"></i>
              <i class="fas fa-user"></i>
                <input type="text" class="form-control" id="stdID" name="stdID" placeholder="21302037"value="<?php echo $_POST["stdID"];?>" required>
            </div>
            <br>
             <!--Input field for First Name-->
            <div class="form-control">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName"name="firstName" placeholder="John"value="<?php echo $_POST["firstName"];?>" required>
            </div>
            <br>
             <!--Input field for Last Name-->
            <div class="form-control">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Doe"value="<?php echo $_POST["lastName"];?>" required>
            </div>
            <br>
             <!--Input field for Date of Birth-->
            <div class="form-control">
                <label for="dob">DOB (dd/mm/yyyy)</label>
                <input type="text" class="form-control" id="dob" name="dob" placeholder="04/07/2000"value="<?php echo $_POST["dob"];?>" required>
            </div>
            <br>
             <!--Input field for Gender-->
            <div class="form-control">
                <label for="gender">Gender</label>
                <div>
                <label for="male" class="'radio-inline"><input type="radio" name="gender" id="male" value="M">Male</label> 
                <label for="female" class="'radio-inline"><input type="radio" name="gender" id="female"value="F">Female</label>
                <label for="other" class="'radio-inline"><input type="radio" name="gender" id="other" value="Other">Other</label>
            </div>
            <br>
            </div>
             <!--Input field for Date of Marital Status-->
             <br>
             <div class="form-control">
                <label for="maritalStat">Marital Status</label>
                <input type="text" class="form-control" id="maritalStat" name="maritalStat" placeholder="Single"value="<?php echo $_POST["maritalStat"];?>" required>
            </div>
            <br>
              <!--Input field for Date of Home Province-->
              <div class="form-control">
                <label for="hprovince">Home Province & District</label>
                <input type="text" class="form-control" id="hprovince" name="hprovince" placeholder="East New Britian, Rabaul"value="<?php echo $_POST["hprovince"];?>" required> 
            </div>
            <br>
            <!--Input field for Religion-->
            <div class="form-control">
               <label for="religion">Religion</label>
               <input type="text" class="form-control" id="religion" name="religion" placeholder="Christianity"value="<?php echo $_POST["religion"];?>" required> 
           </div>
           <div class="header2">
               <h5>Contact Details</h5>
           </div>
       
           <div class="form-control">
               <label for="pno">Phone Number</label>
               <input type="text" class="form-control" id="pno" name="pno" placeholder="72021718"value="<?php echo $_POST["pno"];?>" required> 
           </div>
           <br>
           <div class="form-control">
               <label for="email">Email</label>
               <input type="text" class="form-control" id="email" name="email" placeholder="John@gmail.com"value="<?php echo $_POST["email"];?>" required> 
           </div>
           <br>
          
           <input type="submit" class="btn"  name="submit" value="Submit" />
       </form>
    
     <div>
       <small> &copy;Sexy Blinders </small>
     </div>

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