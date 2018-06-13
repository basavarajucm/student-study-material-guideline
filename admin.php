
	
<html>
  <head>
     <title>admin</title>
   </head>
   <body bgcolor="green">
     <fieldset>  
      <div id="header">
	  <form action="removestu.php" method="post">
	   
		   <table>
		    <tr>
			  <td>Enter the USN:</td>
			  <td><input type="text" id="name" name="usn" placeholder="usn" style="height:30px; width:200px" required></td>
			   <td><input type= "submit" name="submit" value="Remove Student" style="height:50px; width:150px"></td>
			   </tr>
			</tr>
           </table>  
          
	</form>	
	</div>
	 <div id="body">
	 <form action="upload.php" method="post">
	  <table>
		    <tr>
			  <td>UPLOAD NOTES:</td>
          		
           <td><input type= "submit" name="submit1" value="UPLOAD" style="height:50px; width:200px"></td>
		   </tr>
		 </table>  
	  </form>	
	</div>
     <div id="body">
	 <form action="viewfeedback.php" method="post">
	 <table>
	 <tr>
	 <td>VIEW FEEDBACKS</td>
	 <td><input type="submit" value="Click Here" style="height:50px; width:200px"/></td>
	 </tr>
	 </table>
	 
	  </form>	
	</div>	
		
	<a href="adminverify.php">LOGOUT</a>
   
</fieldset>	  
</body>
</html>   
        		   
