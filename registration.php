
<!DOCTYPE html>
<html>
<head>

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
          <li><a href="books.php">BOOKS</a></li>
          <li><a href="librarian_login.php">LIBRARIAN_LOGIN</a></li>
          <li><a href="view_librarian.php">LIBRARIANS</a></li>
          <li><a href="feedback.php">FEEDBACK</a></li>
        </ul>
      </nav>
</header>

<section>
  <div class="reg_img">
    <br> <br><br> <br>
    <div class="box2">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">LIbrarian Registration Form</h1><br>
      <form name="Registration" action="try.php" method="post">
        <br><br>
        <div class="login">
          
          <input type="text" name="name" placeholder="Name" required=""> <br><br>
          <input type="text" name="f_name" placeholder="Father name" required=""> <br><br>
          <input type="text" name="email_id" placeholder="Email id" required=""> <br><br>
          <input type="text" name="mobile_no" placeholder="mobile No" required=""><br><br>
          <input type="password" name="password" placeholder="Password" required=""><br><br>
         <button type="submit" name="submit" >submit</button><br><br>
          
        </div>
      </form>
     
    </div>
  </div>
</section>

   
</body>
</html>