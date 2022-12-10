
<?php
include 'config.php';
session_start();
error_reporting(0);

if (!isset($_SESSION["user_id"])) {
    header("Location: index.php");
  }




if (isset($_POST["submit"])) {
  $stdID = mysqli_real_escape_string($conn, $_POST["std_ID"]);
  $res = mysqli_real_escape_string($conn, $_POST["resident"]);
  $dorm = mysqli_real_escape_string($conn, ($_POST["dorm"]));
  $room= mysqli_real_escape_string($conn, ($_POST["room"]));
  $messno = mysqli_real_escape_string($conn, ($_POST["messno"]));
  $algs = mysqli_real_escape_string($conn, ($_POST["allergies"]));
 

  $sql = "UPDATE lodging SET Resident='$res',Dorm='$dorm',RoomNo='$room',TAFNo='$messno',Allergies='$algs' WHERE StudentID='$stdID'";
  $result = mysqli_query($conn , $sql);

  if ($result) {
    $_POST["std_ID"] = "";
    $_POST["resident"] = "";
    $_POST["dorm"] = "";
    $_POST["room"] = "";
    $_POST["messno"] = "";
    $_POST["allergies"] = "";

    echo "<script>alert('Lodging details successfully added');</script>";
    header("Location: SuccessfullyAddedPage.php");
}
else{
  echo "<script>alert('Adding Lodging details Failed');</script>";

}
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lodging & Mess Details</title>
    
    
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
            <nav id="navy">
      <main class="mainy">
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

            <div id="info">
              <center>
                <h3 style="font-size:30px;" id="infor">Instructions</h3>
                <br>
                    <h4 style="font-size:20px;" id="note"> 
                        This form is for the student's personal details. Please fill the form carefully and correctly making
                    sure to cross check before submitting.

                    </h4>
                </center>  
            </div>
            <br>
             <div class="formcontainer"> 
                <div class="pdheader">
               <center> <h3>Mess & Lodging Details</h3></center>
                       </div>
 
        
                    <!--Heading--->
                           <form class="form" id="form" action="#" method="post">
                           <div class="residentheader2">
                                  <h4>Lodging Details</h4>
                              </div>
                              <div class="form-control">
                <label for="stdID">Student ID</label>
          
                <input type="text" class="form-control" id="stdID" name="std_ID" placeholder="21302037"value="<?php echo $_POST["std_ID"];?>" required>
            </div>
            <br>
                                
                                <!--Input field for Residental status-->
                               <div class="form-control">
                                   <label for="resident">Resident</label>
                                   <div>
                                   <label for="yes" class="'radio-inline"><input type="radio" name="resident" id="yes" value="Yes">Yes</label> 
                                   <label for="no" class="'radio-inline"><input type="radio" name="resident" id="no"value="No">No</label>
                                  
                               </div>
                             
                               </div>
                                
                               <br>
                                 <!--Input field for Dorm Name-->
                                 <div class="form-control">
                                   <label for="dorm">Dorm</label>
                                   <input type="text" class="form-control" id="dorm" name="dorm" placeholder="Lodge 5"value="<?php echo $_POST["dorm"];?>" required> 
                               </div>
                               <br>
                               <!--Input field for Room Number-->
                               <div class="form-control">
                                  <label for="room">Room No.</label>
                                  <input type="text" class="form-control" id="room" name="room" placeholder="11"value="<?php echo $_POST["room"];?>" required> 
                              </div>
                              <div class="messheader2">
                                  <h4>Mess Details</h4>
                              </div>
                
                              <div class="form-control">
                                  <label for="messno">TAF No.</label>
                                  <input type="text" class="form-control" id="messno" name="messno" placeholder="0838"value="<?php echo $_POST["messno"];?>" required> 
                              </div>
                              <br>
                              <div class="form-control">
                                   <label for="allergies">Allergies</label>
                                   <div>
                                   <label for="yes" class="'radio-inline"><input type="radio" name="allergies" id="yes" value="Yes">Yes</label> 
                                   <label for="no" class="'radio-inline"><input type="radio" name="allergies" id="no"value="No">No</label>
</div>
                               </div>
                              
                              <br>
                              <input type="submit" class="btn"  name="submit" value="Submit"/>
           
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