<?php
//echo "Hello world";
$username=$_POST['username'];
$password=$_POST['password'];


$conn = mysqli_connect("localhost:3307","root","","atma");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
echo "Connected successfully";
 //$query="se";
 $query="select password from login where username='$username'";
 $result=mysqli_query($conn,$query) or die(mysql_error()." in ".$query);
 
 $my_id_array=mysqli_fetch_assoc($result);
   
    $pass_array=$my_id_array['password'];
    if($pass_array==$password)
    {
	 session_start();
	 $_SESSION["username"]=$username;
     header("Location:http://localhost:83/codeforgood/team-14/html/project_manager.php");
     print "success";
    }
    else
    {
	 print "failure";
	}
   mysqli_close($conn);



?>