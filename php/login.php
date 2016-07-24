<?php
//echo "Hello world";
$username=$_POST['username'];
$password=$_POST['password'];


$conn = mysqli_connect("localhost","root","root","atma");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
echo "Connected successfully";
 //$query="se";
 $query="select password from login where username='$username'";
 $result=mysqli_query($conn,$query) or die(mysql_error()." in ".$query);
 
 $my_id_array=mysqli_fetch_assoc($result);
   
    $pass_array=$my_id_array['password'];
    $role = $my_id_array['role'];
    if($pass_array==$password)
    {
    	session_start();
    	$_SESSION["username"]=$username;
        if( $role == "volunteer"){
            header("../html/volunteer.php");
        }
        if( $role == "ngo_patner" ){

        }
        if( $role == "partnership_manager" ){
            header("../html/project_manager.php");
        }
        print "success";
    }
    else
    {
	 print "failure";
	}
   mysqli_close($conn);



?>