<?php
    session_start();

    if($_SESSION['name'])
    echo "<h1>Welcome,".$_SESSION['name']."!</h1>";
    else
        die("you must logged in");

?>

<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="user-scalable=0, width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Belle &amp; Carrie Rehabilitation Yoga Web Template</title>
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
			<li class="current">
				<a href="home.php">Home</a>
			</li>
			<li>
				<a href="staff.php">Staff Info</a>
			</li>
			<li>
				<a href="notes.php">Lecturer NOTES</a>
				<!--<ul>
					<li>
						<a href="instructors.html">ABOUT</a>
					</li>
				</ul>-->
			</li>
			<li>
				<a href="feedback.php">Feedback</a>
			</li>
			<li>
				<a href="about.html">ABOUT US</a>
			</li>
			
		</ul>
	</div>
	<div id="body" background color="blue">
			<img src="images/download.jpg">
			<div>
			  <p><b>
			  R.N. S Institute of Technology ( RNSIT ) is established by Shri. R N Shetty,an industrialist and enterpreneur and is well known all over Karnataka as a great philanthropist and statesman. Sri R N Shetty is totally committed in shaping this college into a "NUMBER 1" Institute of Engineering ,Computer Applications and Management, in Karntaka. In recognition of his yeoman service in the fields of Industry, Education and Social service, he has been awarded the 'Sri M Visvesvaraya Memorial Award' from FKCCI, Karnataka and the 'Rajyotsava Award from Govt. of Karnataka for the year 2004'<b><p>.

<h3><p><b>ACHIEVEMENTS OF THE INSTITUTION</b></h3></p>

<p>BITES (BOARD OF IT EDUCATION STANDARDS ) has ranked the RNSIT as "the number 1" Engineering COllege in Computer Science and Information Science & Engineering branches among the colleges started after 2000 in Karnataka.

The General Merit quota of the college during the academic year 2004 CET counselling was full in the first 2 days for specialised branches i.e Electronics, Computer Science and Information Science, within the first 2600 rank holders, thus rated among the first 5 colleges out of nearly 125 engineering colleges of the state.

The college has a sprawling campus full of greenery with facilities like sports,cultural activities,canteen,transportation,browsings facilities and separate hostels for boys and girls.

The college has the best teaching staff, most of them are specialized , remowned and are brilliant scholars in their respective fields.

Results are excellent and are comparable with the top two colleges, achieveing around 80%-90% in different semester exams , conducted by VTU, Belgaum.</p>
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
		</div>-->
	</div>
	<center>
	     <form action="stulogin.php">
			<input type="submit" value="LOGOUT" style="height:50px; width:950px"/>
			 <?php session_destroy();?>  
		 </form>	
  </center>
</body>
</html>