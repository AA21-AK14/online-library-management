<?php
include'connection.php';
      if(isset($_POST['submit']))
       {
       	$Name=$_POST['name'];
       	$Fathername=$_POST['f_name'];
       	$Email=$_POST['email_id'];
       	$Mobile=$_POST['mobile_no'];
       	$Password=$_POST['password'];

       	$query="Insert into users(name,f_name,email_id,mobile_no,password)values('$Name','$Fathername','$Email','$Mobile','$Password')";
       	if (mysqli_query($db,$query)) {
       		echo "record submit";
       	}
       	else
       		echo"error".$query."".mysqli_error($db);
       	    mysqli_close($db);
       }
 ?>
