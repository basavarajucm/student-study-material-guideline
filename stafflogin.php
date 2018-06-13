

<html>
  <head>
    <!-- <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>-->
  </head>
  <center>
  
<body background="C:\wamp\www\basuproject\images1\bg.jpg">
 <form action="connect.php" method="post"> 
 <h1 bgcolor="red">STAFF LOGIN</h1><br>
<table border="0" cellpadding="3" cellspacing="5">

   <tr>
        <td>
            <label bgcolor="red">User Name:</label>
        </td>
        <td>
            <input type="text" name="uname" id="uname" />
        </td>
    </tr>
	
	
	<tr>
        <td>
            Password:
        </td>
        <td>
            <input type="password" name="password" />
        </td>
    </tr>
   <tr>
        <td>
            Subject:
        </td>
        <td>
            <input type="text" id="sub" name="sub" />
        </td>
    </tr>
	
	<tr>
        <td>
            Semister:
        </td>
        <td>
            <input type="text" id="sem" name="sem" />
        </td>
    </tr>
    <tr>
        <td>
		    <label for="file">Select a file to upload</label>
        </td>
        <td>
          <input type="file" name="file" />
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
            <input type="submit" name="submit" value="upload"/>
			<input type="reset" id="btnSubmit" value="reset"/>
        </td>
    </tr>
	
	 
</table>
</form>
<h2><a href="staffreg.php">New User?Click Here to Register</a></h2>
</body>

</center>
</html>
