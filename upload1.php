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
     
 //$file = rand(1000,100000)."-".$_FILES['file']['name'];
 
     $uname=$_POST['uname'];
	 $email=$_POST['email'];
	 $password=$_POST['password'];
	 $sub= $_POST['sub'];
	 $sem=$_POST['sem'];
	 $filename = $_FILES['file']['name'];
	 //$file_size = $_FILES['file']['size'];
     //$file_type = $_FILES['file']['type'];
	 $target_path = "./semester1/";  
    $target_path = $target_path.basename( $_FILES['file']['name']);   
    if(move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {  
     echo "File uploaded successfully!";  
    } 
   else
   {  
    echo "Sorry, file not uploaded, please try again!";  
    }  

     /*$filename = $_FILES['file']['name'];
     $file_loc =  "./semester1/".$filename;                         //$_FILES['file']['tmp_name'];
     $file_size = $_FILES['file']['size'];
     $file_type = $_FILES['file']['type'];
	 
	 if($sem == '1')
	 {
       $folder = "semester1/";
	 }
     else if($sem == '2')
	 {
		 $folder = "semester2/";
	 }	
     else if ($sem == '3')
	 {
		 $folder = "semester3/";
	 }	
      else if ($sem == '4')
	 {
		 $folder = "semester4/";
	 }	
     else if ($sem == '5')
	 {
		 $folder = "semester5/";
	 }		 
	 else if ($sem == '6')
	 {
		 $folder = "semester6/";
	 }
	 
	else
	{
		echo "cannot move";
	}
	
	
 move_uploaded_file($file_loc,$folder.$filename);*/      
 $sql="INSERT INTO uploads(id,username,email,password,sub,sem,file,path) VALUES(NULL,'$uname','$email','$password','$sub','$sem','$filename','$target_path')";
 if(mysqli_query($conn,$sql))
 {
	$sql="SELECT * FROM uploads";
   $result_set=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result_set);
	
	echo "file uploaded successfully";
 }
else{
	  echo "can't upload files";
    }
}
/*else
{
	echo "error";
}*/

?>