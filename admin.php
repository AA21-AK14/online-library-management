<?php
session_start();
include"nav.php";
if(isset($_SESSION['use']))
{
	?>
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.res_img{
			  height: 663px;
  width: 1536px;
  margin-top: 0px;
  background-image: url("resize.jpg");
		}
	</style>
	<title></title>
</head>
<body>
<section>
		<div class="sec_img">
			<br><br><br>
			<div class="box">
				<br><br><br><br>
				<h1 style="text-align: center; font-size: 35px">Welcome Admin</h1><br><br>
				
			</div>
		</div>
		</section>
		<footer>
			<p style="color:white;  text-align: center; ">
				<br><br>
				Email: Online.library@gmail.com <br>
				Mobile: 9181360xxxx
			</p>
		</footer>
	</div>
</body>
</html>
<?php
}
else{

header("Location:admin_login.php");
}
?>