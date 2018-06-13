
	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentaccount";


$conn =  mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*else{
	echo "database connected successfully \n";
}*/
$query = "select * from uploads";
$query1 = mysqli_query($conn,$query);
while($rows = mysqli_fetch_array($query1))
{
	$path = $rows['path'];
	$id = $rows['id'];
	echo '<iframe src = "'.$path.'" width="200px" height="200px"/></iframe>';
}

?>


