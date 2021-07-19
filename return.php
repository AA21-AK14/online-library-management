<?php

include'connection.php';
      if(isset($_POST['submit']))
       {
       
        $BookId=$_POST['book_id'];
        $IssueId=$_POST['issuebook_id'];
       
        $ReturnDate=$_POST['return_date'];
       

        $query="UPDATE `issuebook` SET `issuebook_status` = 'Returned' WHERE `issuebook`.`issuebook_id` = $IssueId";

        if (mysqli_query($db,$query)) {
          echo '<script>alert("Book Returned Sucessfully")</script>';
        }
        else
          echo"error".$query."".mysqli_error($db);
            mysqli_close($db);
       }
 ?>
<?php
include'connection.php';
      if(isset($_POST['submit']))
       {
        $BookId=$_POST['book_id'];
       

        $query="UPDATE `books` SET `book_quantity` = '1' WHERE `books`.`book_id` = $BookId";
        if (mysqli_query($db,$query)) {
         
       }
     }
 ?>
 <?php
include'connection.php';
      if(isset($_POST['submit']))
       {
         $ReturnDate=$_POST['return_date'];
         $IssueId=$_POST['issuebook_id'];
       

       $query="UPDATE `issuebook` SET `return_date` = '$ReturnDate' WHERE `issuebook`.`issuebook_id` = $IssueId";
        if (mysqli_query($db,$query)) {
         
       }
     }
 ?>

<!DOCTYPE html>
<html>
<head><style type="text/css">
  .ret_img{
    height: 663px;
  
  width: 1536px;
  margin-top: 0px;
  background-image: url("ret.jpg");}
</style>

  <title>librarian Registration</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  
</head>
<body>
<header style="height: 90px;">
  
<div class="logo">
      <h1 style="color: white; font-size: 25px;word-spacing: 10px; line-height: 80px;margin-top: 20px;">ONLINE LIBRARY MANAGEMENT SYSTEM</h1>
    </div>

      <nav>
        <ul>
         <li><a href="index.php">HOME</a></li>
          <li><a href="student.php">STUDENT'S</a></li>
          <li><a href="issue.php"> ISSUE_BOOK</a></li>
          <li><a href="return.php">RETURN_BOOK</a></li>
          <li><a href="register.php">ADD_STUDENT</a></li>
        </ul>
      </nav>
</header>

<section>
  <div class="ret_img">
    <br> <br><br> <br>
    <div class="box2"><br><br><br>

        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">RETURN BOOK</h1><br>
      <form name="Registration" action="" method="post">
        <br><br>
        <div class="login">
          
          <input type="text" name="book_id" placeholder="Book_Id" required=""> <br><br>
          <input type="text" name="issuebook_id" placeholder="issuebook_id" required=""> <br><br>
          
          <input type="date" name="return_date" placeholder="Return_Date" required=""> <br><br>
          
         <button type="submit" name="submit" >submit</button><br><br>
          
        </div>
      </form>
     
    </div>
  </div>
</section>
</body>
</html>