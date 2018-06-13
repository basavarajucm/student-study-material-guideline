
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentaccount";


$conn =  mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
else{
	echo "database connected successfully \n";
}
if (isset($_GET['dow']))
{
	$path = $_GET['dow'];
	$res = mysql_query("SELECT * FROM uploads WHERE path='$path'");
	
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="' . basename($path). '"'); 
    header("Content-Transfer-Encoding: utf-8");   	
	header('Content-Length: ' . filesize($path));
	readfile($path);
}
/*$id = $_GET['id'];
$query = "select * from uploads where id = '$id'";
$query1 = mysqli_query($conn,$query);
while($rows = mysqli_fetch_array($query1))
{
	$path = $rows['path'];
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename= '. $path. ''); 
   // header("Content-Transfer-Encoding: utf-8");   	
	header('Content-Length: ' . filesize($path));
	readfile($path);
}*/


?>