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
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>About - Belle &amp; Carrie Rehabilitation Yoga Web Template</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script type='text/javascript' src='js/mobile.js'></script>
</head>
<body>
	<div id="header">
		<table>
	<tr><td><image src="staff/logo1.jpg" width="97" height="99"></td>
	   <td><h1><a href="home.php">RNS INSTITUTE OF TECHNOLOGY <span>Department of MCA</span></a></h1></td>
	</tr>
    </table>	
		<ul id="navigation">
			<li>
				<a href="home.php">Home</a>
			</li>
			<li>
				<a href="staff.php">Staff Info</a>
			</li>
			<li class="current">
				<a href="notes.php">Lecturer Notes</a>
				<!--<ul>
					<li>
						<a href="instructors.html">Instructors</a>
					</li>
				</ul>-->
			</li>
			<li>
				<a href="feedback.php">FeedBack</a>
			</li>
			<li>
				<a href="about.html">About US</a>
			</li>
		</ul>
	</div>
	<div id="body">
	<center><h1>Lecturer Notes</h1></center>
	<?php
	 $result = mysqli_query($conn,"SELECT * FROM uploads");
	 
     echo "<table border='1' cellspacing='7' cellpadding = '7'>
    <tr>
    <th>LecturerName</th> 
    <th>Subject</th>
	<th>Semester</th>
	<th>notes</th>
	<th>description</th>
	<th>Download</th>
	
    </tr>";
    while($row = mysqli_fetch_array($result))
   {
	   $id = $row['id'];
	   $path= $row['path'];
	   $name = $row['file'];
     echo "<tr>";
     echo "<td>" . $row['username'] . "</td>";
     echo "<td>" . $row['sub'] . "</td>";
	 echo "<td>" . $row['sem'] . "</td>";
	 echo "<td>". $row['file'] . "</td>";
	 echo "<text area rows=\"2\" cols=\"20\"><td>". $row['about']."</td></textarea>";
	 echo "<td><a href=". $row['path'] .">Download</a></td>";
	/* echo "<td>";?><a href="<?php echo $row['path'];?>">download</a> <?php echo "</td>";*/
	/* echo "<td><a href='download.php?dow=$path'>Download </a></td>";*/
	 
}
echo "</table>";
 
mysqli_close($conn);
?>
 


		
	</div>
	<!--<div id="footer">
		<div>
			<span>123 St. City Location, Country | 987654321</span>
			<p>
				&copy; 2023 by Belle &amp; Carrie Rehabilitation Yoga. All rights reserved.
			</p>
		</div>
		<div id="connect">
			<a href="https://freewebsitetemplates.com/go/facebook/" id="facebook" target="_blank">Facebook</a>
			<a href="https://freewebsitetemplates.com/go/twitter/" id="twitter" target="_blank">Twitter</a>
			<a href="https://freewebsitetemplates.com/go/googleplus/" id="googleplus" target="_blank">Google&#43;</a>
			<a href="https://freewebsitetemplates.com/go/pinterest/" id="pinterest" target="_blank">Pinterest</a>
		</div>
	</div>-->
</body>
</html>