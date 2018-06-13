<html>
  <head>
  
  </head>
  <body>
    <form action ="upload1.php">

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

  if(isset($_POST['submit']))
  {
    $uname = $_POST['uname'];
    $password = $_POST['password'];
  }
  else
  {
	  echo "error";
  }
  mysql_connect("localhost","root","");
  mysql_select_db("studentaccount");

$result=mysql_query("select * from stfregister where uname='$uname' and password='$password'");
  if($result)
  {
	  echo $result;
  }
  else{
	  echo "false";
  }
  
   $row=mysql_fetch_array($result);
  
 
    if($row['uname']== $uname && $row['password']==$password)
	{
		 $name = $_FILES['file']['name'];
		 $temp_name = $_FILES['file']['tmp_name'];
		 if ($name)
		 {
			 
		   $location = "upload/$name";
		   move_uploaded_file($tmp_name,$location);
	   $sql = "INSERT INTO stlogin(id, uname, password,filename,path) values (NULL, '$uname', '$password')";
      // if(mysqli_query($conn, $sql))
    
	  echo "row inserted successfully";
	 // header("location:success1.php");
    }
	}
  else
  {
	  echo "failure";
  }
?>

</form>
</body>
</html>                    
 
