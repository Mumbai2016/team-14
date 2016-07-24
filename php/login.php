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
 $query="select role,password from login where username='$username'";
 $result=mysqli_query($conn,$query) or die(mysql_error()." in ".$query);
 
 $my_id_array=mysqli_fetch_assoc($result);
   
    $pass_array=$my_id_array['password'];
    $role = $my_id_array['role'];
    if($pass_array==$password)
    {
<<<<<<< HEAD
	 session_start();
	 $_SESSION["username"]=$username;
	 //$query2 = mysql_query("SELECT * FROM users WHERE role='volunteer'");
     //$numrow = mysql_num_rows($query2);

   
        // LOGIN code
       
            $rolename = $my_id_array['role'];
          //  $dbpassword = $row['$password_login'];
        

        
        if ($rolename== "volunteer") {
             header("Location:http://localhost:83/codeforgood/team-14/html/volunteer.php");
        } 
		else if ($rolename == "project_partner")
		{
		header("Location:http://localhost:83/codeforgood/team-14/html/project_manager.php");
	     }
	//else
	//header("Location:http://localhost:83/codeforgood/team-14/html/project_manager.php");
     print "success";
=======
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
>>>>>>> 7ffd1a1086e03131cdef78179e0ba0fe365c39f4
    }
    else
    {
	 print "failure";
	}
    mysqli_close($conn);
?>