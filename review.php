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
     if($_SERVER["REQUEST_METHOD"] == "POST") 
	  {
		  $name = $_POST['uname'];
		  $email = $_POST['email'];
		  $sub = $_POST['sub'];
		  $message = $_POST['message'];
	  }
	  else
	  {
		  echo "error";
	  }		  
	  
		  $sql = "INSERT INTO feedback(id, name, email, subject, message) VALUES (NULL, '$name', '$email', '$sub', '$message')";
		  if(mysqli_query($conn,$sql))
		  {
			  echo "<h1><center>your feedback is received succesfully,Only Admin can View The FeedBacks<h1><center>";
		  }
		 
		 /* $result = mysqli_query($conn,"SELECT * FROM feedback");
			 while($row = mysqli_fetch_array($result))
			 {
				 $name = $row['name'];
				 $message = $row['message'];
				 
				echo "<h2>". $name ."</h2>";
				echo "<h4>" .$message ."</h4>";
			 }*/

      
?>