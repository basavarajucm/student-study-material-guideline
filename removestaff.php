<?php
    include('serverconnect.php');
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$id = $_POST['lid'];
	}
    else
    {
		echo "error";
	}
	echo "the details of removed staff is";
    $result = mysqli_query($conn,"SELECT * FROM uploads where id='$id'");
        while($row = mysqli_fetch_array($result))
        {
			$id = $row['id'];
			$name = $row['username'];
			
			echo "<h3>usn:".$id."</h3>";
			echo "<h3>name:".$name."</h3>";
		}			
    $sql = "DELETE FROM uploads where id ='$id'";
    if(mysqli_query($conn,$sql))
	{
        
		echo "removed SUCCESSFULLY";
	}	
    else
	{
		echo "error";
	}		
?>
