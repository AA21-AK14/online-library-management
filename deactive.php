<?php

include'connection.php';
      if(isset($_POST['submit']))
       {
        $emailid=$_POST['user_id'];
       
       $quer="UPDATE `users` SET `active` = '0' WHERE `users`.`user_id` = $emailid";
        if (mysqli_query($db,$quer)) 
        {  

          echo '<script>alert("Status change sucessfully")</script>';
        }
        else
          echo"error".$quer."".mysqli_error($db);
            mysqli_close($db);
       }
 ?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
 <link rel="stylesheet" type="text/css" href="style1.css">
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1"> 
</head>

<body>
<header style="height: 133px;">
   
 <div class="logo">
      <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    </div>
      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="books.php">BOOKS</a></li>
          <li><a href="view_librarian.php">LIBRARIAN'S</a></li>
          
          <li><a href="registration.php">ADD_LIBRARIAN</a></li>
        </ul>
      </nav>
</header>

<section>
  <div class="reg_img">
    <br> <br><br> <br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">DEACTIVATE STATUS</h1><br>
      <form name="CHANGE_STATUS" action="status.php" method="post">
        <br><br>
        <div class="login">
          
          <input type="text" name="user_id" placeholder="User Id" required=""> <br><br>
         
         
         <button type="submit" name="submit">submit</button><br><br>
          
        </div>
      </form>
     
    </div>
  </div>
</section>

</body>
</html>