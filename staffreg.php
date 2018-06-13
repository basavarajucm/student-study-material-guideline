<?php
   include('serverconnect.php');
   
if(isset($_POST['add']))
{    
      $uname=$_POST['uname'];
	 $designation=$_POST['dest'];
	 $email=$_POST['email'];
	 $phno= $_POST['mobile'];
}
	
    
 $sql="INSERT INTO stfregister(id,sname,designation,email,mobile) VALUES(NULL,'$uname', '$designation','$email','$phno')";
  if(mysqli_query($conn, $sql)){
				 //  echo "row inserted successfully";
				 header('location:staff.php');
				  
                    
}
 else{
           echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>

<html>
  <head>
    <script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
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
   return (true)
	}
</script>
  </head>
  <center>
  
<body background="C:\wamp\www\basuproject\images1\bg.jpg">
 <form action="staffreg.php" method="post" name="registration" onsubmit="return(Validate())"> 
 <h1 bgcolor="red">Adding Faculty Information</h1><br>
<table border="0" cellpadding="3" cellspacing="5">

   <tr>
        <td>
            <label bgcolor="red">Staff Name:</label>
        </td>
        <td>
            <input type="text" name="uname" id="uname" />
        </td>
    </tr>
	<tr>
        <td>
            <label bgcolor="red">Designation</label>
        </td>
        <td>
            <input type="text" name="dest" id="dest" />
        </td>
    </tr>
	
	<tr>
        <td>
            Email:
        </td>
        <td>
            <input type="text" id="email" name="email" />
        </td>
    </tr>
    <tr>
        <td>
            Ph.No:
        </td>
        <td>
            <input type="text" id="mobile" name="mobile" />
        </td>
    </tr>
    <tr>
        <td>
        </td>
        <td>
            <input type="submit" id="btnSubmit" name="add" value="ADD" style="height:30px; width:100px"/>
			<input type= "reset" id="btnSubmit" value="RESET" style="height:30px; width:100px"/>
        </td>
    </tr>
	
	 
</table>
</form>

</body>

</center>
</html>

