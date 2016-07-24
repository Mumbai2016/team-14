<html>
<HEAD>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/screening.css">
</HEAD>

<body>
	<div class="table-title">
    <h2>Volunteer Details</h2>
    </div>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "atma";
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM volunteer";
$result = $conn->query($sql);

echo'
	<table class="table-fill">
	<tr>
	<th class="text-left">Volunteer Name</th>
	<th class="text-left">Gender</th>
	<th class="text-left">Email</th>
	<th class="text-left">Motivation</th>
	<th class="text-left">Resume</th>
	<th class="text-left">Screening</th>
	<th class="text-left">Selection</th></tr>';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
    	echo '<form action="" method="post">';
       echo '<tr><td class="text-left">'.$row["name"].'</td>';
       echo '<td class="text-left">'.$row["gender"].'</td>';
       echo '<td class="text-left">'.$row["email"].'</td>';
       echo '<td class="text-left">'.$row["motivation"].'</td>';
       echo '<td class="text-left">'.$row["file_name"].'</td>';
       echo '<input type="hidden" name="hidd" value="'.$row["id"].'">' ;
       if($row["screened"]=="no")
       { echo '<td class="text-left"><input type="submit" class="btn-success" name="screened" value="SCREENED"></td>';
         echo '<td class="text-left"><input type="submit" class="btn btn-default" disabled="disabled" name="selected" value="SELECTED"></td>';
       }
       else if($row["screened"]=="yes" && $row["selected"]=="no")
       {
       echo '<td class="text-left"><input type="submit" class="btn btn-default" disabled="disabled" name="screened" value="SCREENED"></td>';
       echo '<td class="text-left"><input type="submit" class="btn-success" name="selected" value="SELECTED"></td>';
       }
       else if($row["screened"]=="yes" && $row["selected"]=="yes")
       { 
       	 echo '<td class="text-left"><input type="submit" class="btn btn-default" disabled="disabled" name="screened" value="SCREENED"></td>';
       	 echo '<td class="text-left"> <input type="submit" class="btn btn-default" disabled="disabled" name="selected"  value="SELECTED"></td>';
       	}
       
       echo'</tr></form>';      
}
} 
	echo'</table>';
    
?>
<?php
 if (isset($_POST['screened'])) {
        $s = $_POST['hidd'];
      //  echo $s;
      $sql = "UPDATE volunteer SET screened='yes' WHERE id='".$s."'";
    //  $sql = "SELECT * FROM volunteer";
   if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error updating record: " . $conn->error;
}
		
    //  $row = $result->fetch_assoc();


       // $sql = 'UPDATE volunteer SET screened="yes" WHERE name='".$s."';
      //   $stmt = $conn->prepare($sql);
    // execute the query
      //  $stmt->execute();
     //  header('Location: '.$_SERVER['PHP_SELF']);
	   die;
        // Do the database update code to set Accept
        
    }

     if (isset($_POST['selected'])) {
        $s = $_POST['hidd'];
      //  echo $s;
      $sql = "UPDATE volunteer SET selected='yes' WHERE id='".$s."'";
    //  $sql = "SELECT * FROM volunteer";
   if ($conn->query($sql) === TRUE) {
   
} else {
    echo "Error updating record: " . $conn->error;
}
	$sql = "SELECT * FROM volunteer where id='".$s."'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
	
    $id=$row["id"];
    $name=$row["name"];
    $con=$row["contact"];
    $email=$row["email"];
    $fn=$row["file_name"];
    $dob=$row["dob"];
    $gender=$row["gender"];
    $pp=$row["pic_path"];
    $p=$row["p_id"];
    $deg=$row["degree"];
    $m=$row["motivation"];
    $ex=$row["expertise"];
    $pe=$row["past_exp"];
    $bg=$row["blood_group"];
    $sc=$row["screened"];
    $se=$row["selected"];
    $sql="INSERT INTO selected_volunteers VALUES ('$id','$name','$con','$email','fn','$dob','$gender','$pp','$p','$deg','$m','$ex','pe','$bg','$sc','$se')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    
    }
     $conn->close();
    ?>

	</div>
	</div>
</body>
</html>