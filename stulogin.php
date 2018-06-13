<!DOCTYPE html>
<html>
<style>


input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

.button {
    background-color: #4CAF50;
    color: white;
    padding: 20px 25px;
    margin: 6px 3;
    border: none;
    cursor: pointer;
    width: 10%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 2px 0 2px 0;
}

img.avatar {
    width: 10%;
    border-radius: 40%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body bgcolor="black">

<center><font size="10" color="red">Student Login Form</font></center>

<form action="verify.php" method="post">
  <div class="imgcontainer">
    <img src="images/3.jpg" alt="Avatar" class="avatar">
  </div>

  <div class="container">
  <center>
     <table>
	 <tr>
    <td><label><b><font size="5" style="color:white;">USN :</font></b></label></td>
    <td><input type="text" placeholder="Enter USN" name="usn" required><br></td></tr>
	<tr><td>
    <label><b><font size="5" style="color:white;">Username:</font></b></label></td>
    <td><input type="text" placeholder="Enter Username" name="username" required><br></td></tr>
     <tr><td>
    <label><b><font size="5" style="color:white;">Password:</font></b></label></td>
    <td><input type="password" placeholder="Enter Password" name="password" required><br></td>
	<tr><td></td>
	 <td>
     <label><button type="submit" style="color:green;height:50px; width:100px">LOGIN</button></label>
	 <button type="reset" style="color:red;height:50px; width:100px">RESET</button></td>
	 </tr>
	 </table>
    
  </div>

  <center><font size="5"><a href="registration.php">New User?Click here to Register</a></font></center>
</form>


</body>
</html>






 <!--<html>
  <head>
     <title>login form</title>
  </head>
  <body bgcolor="##F0F8FF">
   <fieldset align="center" color="yellow">
    
	<center>
	<h1>LOGIN FORM</h1>
  <form action="verify.php" method="post">
   <table border="0" cellpadding="3" cellspacing="5">
    <tr>
       <td>USN:</td>
	   <td>
		  <input type="text" id="usn" name="usn" placeholder="usn"/><br/><br/>
	   </td>
    </tr>
	
    <tr>
	   <td>Username:</td>
        <td>
		   <input type="text" id="username" name="username" placeholder="username"/><br/><br/>
		</td>
    </tr>
    
    <tr>
      <td>	
          <label for="password">Password:</label>
	  </td>
         <td>	  
            <input type="password" id="password" name="password" placeholder="password"/><br/><br/>
		 </td>
    </tr>		 
                   
	<tr>
       <td>	
	    <div id="lower"><br/>
                        <input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		</td>
         <td>		
              <button type="submit" name="login">LOGIN</button>
			<input type="reset" value="reset"><br/><br/>
		</td>
    </tr>
    <table>	
		<a href="registration.php">New User?Click here to Register</a>
	</form>
	</center>
	</fieldset>
	</body>
	</html>
