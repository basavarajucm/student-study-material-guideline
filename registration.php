<html>
<head>
<title>Student Registration Form</title>
	<head>
<script type="text/javascript">
function validate()
      {
      
	  
	  
	    if( document.registration.usn.value == "" )
         {
            alert( "Please provide your usn!" );
            document.registration.usn.focus() ;
            return false;
         }
         if( document.registration.studentname.value == "" )
         {
            alert( "Please provide your name!" );
            document.registration.student.focus() ;
            return false;
         }
		 if( document.registration.fathername.value == "" )
        {
          alert( "Please provide your Father Name!" );
          document.registration.fathername.focus() ;
          return false;
        }
   
       if( document.registration.address.value == "" )
       {
           alert( "Please provide your Postal Address!" );
           document.registration.address.focus() ;
           return false;
       }
	   if( document.registration.email.value == "" )
         {
            alert( "Please provide your Email!" );
            document.registration.email.focus() ;
            return false;
         } 
		  if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(registration.email.value))  
         {  
              return (true)  
         } 
       else
       {	   
             alert("You have entered an invalid email address!")  
              return (false)  
        }
		 if( document.registration.password.value == "" )
         {
            alert( "Please provide your password!" );
            document.registration.password.focus() ;
            return false;
         }
		var password = document.registration.password.value;
        var confirmPassword = document.registration.cpassword.value;
        if (password != confirmPassword) 
		{
            alert("Passwords do not match.");
			document.registration.password.focus() ;
            return false;
        }
        return true;
		  
		 
		 if( document.registration.mobile.value == "") 
		 {
           alert("Error: Cell number must not be null.");
           mobile.focus();
           return false;
         }

        /* if(document.registration.mobile.length==10)
	     {
			 mobile.focus();
		 }
			 else
			 {
				 
           alert("Phone number must be 10 digits.");
			 }
           return false;
         }*/
		 
		
       }
	   </script>
</head>
	<!--<script type="text/javascript" src="validate.js"></script>-->
</head>
<body bgcolor="black">
<form action="config.php" method="post" name="registration" onsubmit="return(validate())">

	<table border="1" cellpadding="10" width="40%" bgcolor="black" align="center"cellspacing="2">
	
		<tr>
			<td colspan=10>
			<center><font size="5" color="red"><b>Student Registration Form</b></font></center>
			</td>
		</tr>

		
		<tr>
			<td><font size="5" style="color:white;">USN:</font></td>
			<td><input type="text" name="usn" size="50" id="usn" placeholder="usn" required></td>
		</tr>
		<tr>
			<td><font size="5" style="color:white;">Name:</font></td>
			<td><input type="text" name="studentname" size="50" id="studentname" placeholder="username" required></td>
		</tr>

		<tr>
			<td><font size="5" style="color:white;">Father Name:</font></td>
			<td><input type="text" name="fathername" id="fathername" height="20px"
			size="50" placeholder="fathername" required></td>
		</tr>
	
		<!--<tr>
			<td>Postal Address</td>
			<td><input type="text" name="paddress" id="paddress" size="30"></td>
		</tr>-->

		<tr>
			<td><font size="5" style="color:white;">Address:</font></td>
			<td><input type="text" name="address"id="address" size="50" placeholder="address" required>
			</td>
		</tr>

		<tr>
			<td><font size="5" style="color:white;">Gender:</font></td>
			<td>
				<input type="radio" name="sex" value="male" size="10"><font size="5" style="color:white;">Male</font>
				<input type="radio" name="sex" value="Female" size="10"><font size="5" style="color:white;">Female</font>
			</td>
		</tr>

		<tr>
		<!--<td>State</td>
			<td>
			<select name="state" placeholder="city">
				<option value="-1" selected>select..</option>
				<option value="New Delhi">KARNATAKA</option>
				<option value="Mumbai">ANDRA</option>
				<option value="Goa">TAMILNADU</option>
				<option value="Patna">MAHRASTRA</option>
			</select></td>
		</tr>-->

		<tr>
			<td><font size="5" style="color:white;">Course</font></td>
			<td><select name="Course" placeholder="city" width="50px">
			<option value="-1" selected>select..</option>
			<option value="B.Tech">B.TECH</option>
			<option value="MCA">MCA</option>
			<option value="MBA">MBA</option>
			<option value="BCA">MTech</option>
			</select></td>
		</tr>

		<!--<tr>
			<td>District</td>
			<td><select name="District">
			<option value="-1" selected>select..</option>
			<option value="Nalanda">MYSORE</option>
			<option value="UP">MANDYA</option>
			<option value="Goa">HUBLI</option>
			<option value="Patna">SHIVMOGA</option>
		</select></td>

		</tr>

		<tr>
		<!--<td>State</td>
			<td><select Name="State">
			<option value="-1" selected>select..</option>
			<option value="New Delhi">NEW DELHI</option>
			<option value="Mumbai">MUMBAI</option>
			<option value="Goa">GOA</option>
			<option value="Bihar">BIHAR</option>
			</select></td>
		</tr>-->
		
	<!--	<tr>
			<td>PinCode</td>
			<td><input type="text" name="pincode" id="pincode" size="30"></td>
		</tr>-->
		<tr>
			<td><font size="5" style="color:white;">EmailId:</font></td>
			<td><input type="text" name="email" id="emailid" size="50" placeholder="email" required></td>
		</tr>
		
		<tr>
			<td><font size="5" style="color:white;">Password:</font></td>
			<td><input type="password" name="password" id="password" size="50" placeholder="password" required></td>
		</tr>
		
		<tr>
			<td><font size="5" style="color:white;">Confirm Password:</font></td>
			<td><input type="password" name="cpassword" id="cpassword" size="50" placeholder="confirmpassword" required></td>
		</tr>

		<!--<tr>
			<td>password</td>
			<td><input type="password" name="password" id="pwd" size="30" placeholder="password"></td>
		</tr>-->

		<tr>
			<td><font size="5" style="color:white;">MobileNo</font></td>
			<td><input type="text" name="mobile" id="mobileno" size="50" placeholder="mobile number" required></td>
		</tr>
		<tr>
			<td>
				
			</td>
			<td>
			    <input type="submit" value="SUBMIT" style="background-color:green;height:50px;width:100px;"/>
			    <input type="reset" value="RESET" style="background-color:green;height:50px;width:100px;"/>
				
			</td>
		</tr>
		
	</table>
	
</form>
<!--<h2>Registration completed Successfully</h2>
<a href="login.html">LOGIN</a>-->
</body>
</html>