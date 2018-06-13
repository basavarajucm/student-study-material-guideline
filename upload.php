<html xmlns="http://www.w3.org/1999/xhtml">
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
   var semester = document.registration.sem.value;
   if(semseter > 6)
   {
	   alert(" semester between 1 to 6!"); 
       return false; 
   }
   
	   
   return (true)
	}
</script>
</head>
<body background="C:\wamp\www\basuproject\images1\bg.jpg">
<center>
 <form action="upload.php" method="post" name="registration"  enctype="multipart/form-data" onsubmit="return(Validate())"> 
 
<table border="1" cellpadding="10" cellspacing="0">
<tr><td colspan="10"><font size="5" color="red"><center>UPLOAD NOTES</center></font></td></tr>

   <tr>
        <td>
            <label bgcolor="red">lecturer Name:</label>
        </td>
        <td>
            <input type="text" name="uname" id="uname" placeholder="lacturer name" style="height:40;width:250;" required/>
        </td>
    </tr>
	
	
	<!--<tr>
        <td>
            Password:
        </td>
        <td>
            <input type="password" id="txtPassword" name="password" />
        </td>
    </tr>
    <tr>
        <td>
            Confirm Password:
        </td>
        <td>
            <input type="password" id="txtConfirmPassword" />
        </td>-->
		
		<tr>
        <td>
            Subject:
        </td>
        <td>
            <input type="text" id="sub" name="sub" placeholder="subject" style="height:40;width:250;"required/>
        </td>
    </tr>
	
	<tr>
        <td>
            Semister:
        </td>
        <td>
            <input type="text" id="sem" name="sem" placeholder="sem" style="height:40;width:250;" required/>
        </td>
    </tr>
    <tr>
        <td>
		    <label for="file">Select a file to upload</label>
        </td>
        <td>
          <input type="file" name="file" placeholder="lacturer name" required/>
        </td>
    </tr>
	<tr>
        <td>
            <label bgcolor="red">description:</label>
        </td>
        <td>
            <input type="text" name="about" id="email"placeholder="description" style="height:40;width:250;" required />
        </td>
    </tr>
	<tr>
	   <td>
	     </td>
		 <td>
	<button type="submit" name="btn-upload"><font size="5" color="green">UPLOAD</font></button>
          <button type="reset" name="reset"/><font size="5" color="green">RESET</font>	</button>
		  </td>
	
	 
</table>
</form>

</body>

</center>

</form>
</body>
</html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentaccount";


$conn =  mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error)
	{
    die("Connection failed: " . $conn->connect_error);
}
/*else{
	echo "database connected successfully \n";
}*/

if(isset($_POST['btn-upload']))
{    
     $uname=$_POST['uname'];
	 $about=$_POST['about'];
	 //$password=$_POST['password'];
	 $sub= $_POST['sub'];
	 $sem=$_POST['sem'];
	 $filename =  trim(str_replace(" ","_",$_FILES['file']['name']));
	 $temp_name = $_FILES['file']['tmp_name'];
	 //$file_size = $_FILES['file']['size'];
     //$file_type = $_FILES['file']['type'];
	 $location = "upload/$filename";	
 move_uploaded_file($temp_name,$location);
// move_uploaded_file($file_loc,$folder.$filename);     
 $sql="INSERT INTO uploads(id,username,sub,sem,file,path,about) VALUES(NULL,'$uname','$sub','$sem','$filename','$location','$about')";
 if(mysqli_query($conn,$sql))
 {
	$sql="SELECT * FROM uploads";
   $result_set=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result_set);
	
	echo "<center><h3>file uploaded successfully:<a href='index.php'>Click here</a></h3></center>";
	
 }
else{
	  echo "can't upload files";
    }
}
?>
