<?php

include "connection.php"

?>

<!DOCTYPE html>
<html>
<head>
<style type="text/css">
  .feed_img
{
  height: 530px;
  width: 1536px;
  margin-top: 0px;
  background-image: url("fee.jpeg");
}
.wrap{
  width: 900px;
  height: 530px;
  background-color: black;
  opacity: .8;
  color: white;
  margin: auto;

}
.form{
  height: 70px;
  width: 99%;
}
table,th,td
{
border:3px solid white;}
th,td{
 padding: auto;
 text-align: center;
}
.scroll{
  width: 100%;
  height: 400px;
  overflow: auto;
}
</style>
  <title>librarian Registration</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <meta charset="utf-8">

</head>
<body>
  <div class="wrapper">
<header style="height: 134px;">
  
<div class="logo">
      <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    </div>

      <nav>
        <ul>
          <li><a href="index.php">HOME</a></li>
          <li><a href="book.php">BOOKS</a></li>
          <li><a href="librarian_login.php">LIBRARIAN_LOGIN</a></li>
          <li><a href="admin_login.php">ADMIN_LOGIN</a></li>
          <li><a href="feedback.php">FEEDBACK</a></li>
        </ul>
      </nav>
</header>
<section>
  <div class="feed_img">
    <div class="wrap">
    <h4 align="center">If you have any suggestions or quetion please comment below.</h4><br><br>

    <form class="form" style="" action="" method="post">
      <input class="form" type="text" name="comment" placeholder="feedback"><br><br>
      <button type="submit" name="submit">submit </button><br>
    </form>
  <div class="scroll">
  <?php
     if(isset($_POST['submit']))
       {
        $comment=$_POST['comment'];
       
       $quer="Insert into feedback (comment)values('$comment')";
        if (mysqli_query($db,$quer)) 
        {  
         }
        else {
        
          
       }

}

  ?>
  </div>
</div></div>
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


