
<?php
include'connection.php';
session_start();

if(isset($_POST['login']))
{

$username12=$_POST['username'];
$password12=$_POST['password'];

$sql= "select * from users where email_id='$username12'and password='$password12' and isadmin='Y' ";
$result = mysqli_query($db,$sql);
$row= mysqli_fetch_array($result,MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
}
if ($count==1) {
	# code...

$_SESSION['use']='1';
	
	echo '<script>alert("Login Sucessfully")</script>';?>
	 <script> window.location="admin.php"</script>
	<?php
}

else
	echo '<script>alert("Login Failed Try Again")</script>';?>
    <script> window.location="admin_login.php"</script>
	<?php
    


?>


