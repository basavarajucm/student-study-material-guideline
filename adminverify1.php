<?php
      
    if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		$name = $_POST['username'];
		$password =$_POST['password'];
	}
	else
	{
		echo "error";
	}
	 if($name == 'admin' && $password == 'mca')
	 {
		// session_start();
		 $_SESSION['name']=$_POST['username'];
		 header("location:admin.php");
	 }
	 else
	 {
		 echo "<h1> Please Enter a Valid User Name and Password!!!!</h1>";
	 }
?>