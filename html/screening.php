<html>
<HEAD>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	
</HEAD>

<body>
	<div class="container">
    <h2>Volunteer Details</h2>

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

echo'<div class="table-responsive">
	<table class="table">
	<tr>
	<th>Volunteer Name</th>
	<th>Gender</th>
	<th>Email</th>
	<th>Motivation</th>
	<th>Resume</th>
	<th>Screening</th>
	<th>Selection</th></tr>';

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
       echo '<tr><td>'.$row["name"].'</td>';
       echo '<td>'.$row["gender"].'</td>';
       echo '<td>'.$row["email"].'</td>';
       echo '<td>'.$row["motivation"].'</td>';
       echo '<td>'.$row["file_name"].'</td>';
       if(strcmp($row["screened"],"no"))
       echo '<td><input type="button" class="btn-success" name="screen" value="SCREENED"></td>';
       else 
       echo '<td><input type="button" class=".disabled" name="select" value="SCREENED"></td></tr>';
       if(strcmp($row["selected"],"no"))
       echo '<td><input type="button" class="btn-success" name="screen" value="SELECTED"></td>';
       else 
       echo '<td><input type="button" class=".disabled" name="select" value="SELECTED"></td></tr>';


        
}
} 
	echo'</table>';
    $conn->close();
?>

	</div>
	</div>
</body>
</html>