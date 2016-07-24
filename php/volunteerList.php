<?php
//echo "Hello world";
//$name="ronak mehta";     
//$_POST['username'];
//$password=$_POST['password'];


$conn = mysqli_connect("localhost:3307","root","","atma");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
} 
//echo "Connected successfully";
 //$query="se";
 $query="select name,contact,email,dob,gender,degree,motivation,expertise,past_exp,blood_group,rating from volunteer";
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
   echo $jsonstring;   */
     $list=array();

    while($my_id_array = mysqli_fetch_array ($result))     
    {
     $bus = array(
    'name'=>$my_id_array['name'],
    'contact'=>$my_id_array['contact'],
    'email'=>$my_id_array['email'],
    'dob'=>$my_id_array['dob'],
    'gender'=>$my_id_array['gender'],
    'motivation'=>$my_id_array['motivation'],
    'degree'=>$my_id_array['degree'],
    'expertise'=>$my_id_array['expertise'],
	'blood_group'=>$my_id_array['blood_group'],
	'rating'=>$my_id_array['rating']
	);
	array_push($list, $bus);
    }
	//echo $list;
	$jsonstring = json_encode($list);
     echo $jsonstring;  
	mysqli_close($conn);
?>