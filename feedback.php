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
			<li>
				<a href="notes.php">Lecturer Notes</a>
				<!--<ul>
					<li>
						<a href="instructors.html">Instructors</a>
					</li>
				</ul>-->
			</li>
			<li class="current">
				<a href="feedback.php">FeedBack</a>
			</li>
			<li>
				<a href="about.html">About US</a>
			</li>
		</ul>
	</div>
	<div id="body">
		<h2>FeedBack</h2>
		<form action="review.php" method="post">
			
			<label for="name">
				<span>Name</span>
				<input type="text" id="name" name="uname" placeholder="username" required>
			</label>
			<label for="email">
				<span>Email</span>
				<input type="text" id="email" name="email" placeholder="email" required>
			</label>
			<label for="subject">
				<span>Subject</span>
				<input type="text" id="sub" name="sub" placeholder="subject" required>
			</label>
			<label for="message">
				<span>Message</span>
				<textarea name="message" id="message" cols="30" rows="6" placeholder="message" required></textarea>
			</label>
			<input type="submit" id="send" name="submit" value="POST">
		</form>
		</div>
	

	<!--<div id="footer">
		
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