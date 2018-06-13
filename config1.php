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
 if($_SERVER["REQUEST_METHOD"] == "POST") {
	    $uname=$_POST['uname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$sub= $_POST['sub'];
		$sem=$_POST['sem'];
		$mobile=$_POST['mobile'];
}
else
{
	echo "\n error";
}	
		
		
//$sql="insert into store(username,password)values('$username', '$password')";

$sql="INSERT INTO uploads(id,username,email,password,sub,sem,file,type size) values (NULL,'$uname','$email','$password','$mobile')";
               if(mysqli_query($conn, $sql)){
				   echo "row inserted successfully";
				   header("location:success1.php");
                    
} else{
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


$conn->close();
?> 