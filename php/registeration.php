<?php
   $fname=$_POST["fname"];
   $lname=$_POST["lname"];
   $user=$fname.' '.$lname;
   $email=$_POST["email"];
   $password=md5($_POST["password"]);
   $bday=$_POST["bday"];
   $gender=$_POST["radio"];
   $contact=$_POST["contact"];
   $doj=$_POST["doj"];
   $email=$_POST["email"];
   $gender=$_POST["gender"];
   $age=$_POST["age"];
   
   $dbc = mysqli_connect('localhost','root','','fb') or die('Error connecting to MySQL server.');
  
   $query="insert into volunteer(firstname,lastname,contact,email,date_of_joining,dob,age,gender) values('$fname','$lname','$contact','$email','$doj','$bday','$age','$gender')";
   $result=mysqli_query($dbc,$query) or die(mysqli_error()." in ".$query);
   header("../html/dashboard.php");  



?>