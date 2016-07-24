<?php
//echo "Hello world";
$name="ronak mehta";     //$_POST['username'];
//$password=$_POST['password'];
 $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $motivation=$_POST['motivation'];
    $degree=$_POST['degree'];
    $expertise=$_POST['expertise'];
	$blood_group=$_POST['blood_group'];

$conn = mysqli_connect("localhost:3307","root","","atma");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
//echo "Connected successfully";
 //$query="se";
 $query="update volunteer set name='$name',contact='$contact',email='$email',dob='$dob',gender='$gender',motivation='$motivation',degree='$degree',expertise='$expertise',blood_group='$blood_group' where name='$name'";
 $result=mysqli_query($conn,$query) or die(mysqli_error()." in ".$query);
 
 //$my_id_array=mysqli_fetch_assoc($result);
  
	/*while($my_id = mysqli_fetch_array ($result))     
    {
     $bus = array(
	    'text'=>$my_id['text'],
		'postid'=>$my_id['postid'],
		'userid'=>$my_id['userid'],
	    'name'=>$my_id['name']
     );
     array_push($comments, $bus);
    }

   $jsonstring = json_encode($comments);
   echo $jsonstring;  
  
  while($my_id = mysqli_fetch_array ($result))     
    {
     $bus = array(
    $name=$my_id_array['name'];
    $contact=$my_id_array['contact'];
    $email=$my_id_array['email'];
    $dob=$my_id_array['dob'];
    $gender=$my_id_array['gender'];
    $motivation=$my_id_array['motivation'];
    $degree=$my_id_array['degree'];
    $degree=$my_id_array['expertise'];
	$degree=$my_id_array['blood_group'];
	);*/
	//print json_encode($my_id_array);
	mysqli_close($conn);
?>