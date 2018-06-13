

<?php
session_start();
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
if($_SERVER["REQUEST_METHOD"] == "POST") 
{  
$usn=$_POST['usn'];	
$name=$_POST['username'];
$password=$_POST['password'];
}
else{
	echo "error";
}

/*$usn=stripcslashes($usn);
$password=stripcslashes($password);*/


mysql_connect("localhost","root","");
mysql_select_db("studentaccount");

$result=mysqli_query($conn,"select * from register where usn='$usn' and password='$password'");
 
$row=mysqli_fetch_array($result);
  
  if($row['usn']== $usn && $row['password']==$password){
   
     //$sql="INSERT INTO login(login_id, usn, name, password) values (NULL, '$usn', '$name', '$password')";
	 $_SESSION['name']=$_POST['usn'];
	 header("location:home.php");
  }
  else
	 {
		 echo "<h1>Please Enter a Valid Username and Password";
		//header("location:failure.php");
	 }
	
?>
 