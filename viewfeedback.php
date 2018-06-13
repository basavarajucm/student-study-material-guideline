 <?php
   include('serverconnect.php');
             $result = mysqli_query($conn,"SELECT * FROM feedback");
			 while($row = mysqli_fetch_array($result))
			 {
				 $name = $row['name'];
				 $message = $row['message'];
				 echo "<table><tr><td><h2>". $name ."</h2></td></tr><tr><td><h4>" .$message ."</h4></td></td>";
				 echo "</table>";
			 }
?>			 