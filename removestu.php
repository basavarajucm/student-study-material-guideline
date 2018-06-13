<?php
    include('serverconnect.php');
	
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$usn = $_POST['usn'];
	}
    else
    {
		echo "error";
	}
	echo "the details of removed student is";
    $result = mysqli_query($conn,"SELECT * FROM register where usn='$usn'");
        while($row = mysqli_fetch_array($result))
        {
			$usn = $row['usn'];
			$name = $row['sname'];
			
			echo "<h3>usn:".$usn."</h3>";
			echo "<h3>name:".$name."</h3>";
		}			
    $sql = "DELETE FROM register where usn ='$usn'";
    if(mysqli_query($conn,$sql))
	{
        
		echo "removed SUCCESSFULLY";
	}	
    else
	{
		echo "error";
	}		
?>
