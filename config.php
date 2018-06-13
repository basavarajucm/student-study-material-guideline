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
	    $usn=$_POST['usn'];
		$sname=$_POST['studentname'];
        $fname=$_POST['fathername'];
		$adress=$_POST['address'];
		$sex=$_POST['sex'];
		$course=$_POST['Course'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$mobile=$_POST['mobile'];
}
else
{
	echo "\n error";
}	
		
		
//$sql="insert into store(username,password)values('$username', '$password')";

$sql="INSERT INTO register(usn,sname,fname,address,sex,cource,email,password,mobile) values ('$usn','$sname','$fname','$adress','$sex','$course','$email','$password','$mobile')";
               if(mysqli_query($conn, $sql)){
				   echo "row inserted successfully";
				   header("location:success.php");
                    
} else{
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}


$conn->close();
?> 