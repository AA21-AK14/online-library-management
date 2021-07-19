<?php
include'connection.php';


if (!$db)

die("connection failed".mysqli_connect_error());

else
	echo "successfully connected to database ";

$username12=$_POST['username'];
$password12=$_POST['password'];
echo "$username12 ";

echo "$password12";

$sql= "select * from users where email_id='$username12'and password='$password12'";
$result = mysqli_query($db,$sql);
$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if ($count==1)
{
	echo '<script>alert("login sucessfully")</script>'; ?>

	<script> window.location="librarian.php"</script>
	<?php

	//	header("location:http://www.google.com/");
}

else
	echo '<script>alert("login failed")</script>'; ?>
	<script> window.location="librarian_login.php"</script>
	<?php


mysqli_close($conn);


?>
	
