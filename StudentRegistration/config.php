


<?php

//File for connecting pages to the server and database

$hostname='localhost';
$username='root';
$password='';
$database='studentregistration';

//creating connection to database
$conn=mysqli_connect($hostname,$username,$password,$database)
or die("Database connection failed");


?>