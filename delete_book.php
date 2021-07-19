<?php 
include 'nav2.php';

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>add books</title>
</head>
<body>
	<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<section>
  <div class="reg_img">
    <br> <br><br> <br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">DELETE BOOKS</h1><br>
      <form name="delete_books" action="del.php" method="post">
        <br><br>
        <div class="login">
          
          <input type="text" name="book_id" placeholder="book Id" required=""> <br><br>
         
         
         <button type="submit" name="submit">submit</button><br><br>
          
        </div>
      </form>
     
    </div>
  </div>
</section>


</body>
</html>


