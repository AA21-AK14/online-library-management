<!DOCTYPE html>
<html>
<head>

  <title>librarian Registration</title>
  <link rel="stylesheet" type="text/css" href="style1.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <style type="text/css">
    .stu_img{
        height: 663px;
  width: 1536px;
  margin-top: 0px;
  background-image: url("stu.jpg");
    }
  </style>
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
  <div class="stu_img">
    <br> <br><br> <br>
    <div class="box2"><br><br>
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1><br><br>
        <h1 style="text-align: center; font-size: 25px;">Student Registration</h1><br>
      <form name="Registration" action="" method="post">
        <br><br>
        <div class="login">
          
          <input type="text" name="student_name" placeholder="Student_name" required=""> <br><br>
          <input type="text" name="student_mobile" placeholder="Student_mobile" required=""> <br><br>
          <input type="text" name="student_email" placeholder="Student_email" required=""> <br><br>
          
         <button type="submit" name="submit" >submit</button><br><br>
          
        </div>
      </form>
     
    </div>
  </div>
</section>
<?php
include'connection.php';
      if(isset($_POST['submit']))
       {
        $Studentname=$_POST['student_name'];
        $Studentmobile=$_POST['student_mobile'];
        $Studentemail=$_POST['student_email'];
       

        $query="Insert into student(student_name,student_mobile,student_email)values('$Studentname','$Studentmobile','$Studentemail')";
        if (mysqli_query($db,$query)) {
          echo '<script>alert("Record Added Sucessfully")</script>';
        }
        else
          echo"error".$query."".mysqli_error($db);
            mysqli_close($db);
       }
 ?>


   
</body>
</html>