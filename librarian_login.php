<!DOCTYPE html>
<html>
<head>

  <title>librarian Login</title>
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
          <li><a href="admin_login.php">ADMIN_LOGIN</a></li>
          <li><a href="feedback.php">FEEDBACK</a></li>
        </ul>
      </nav>
</header>
<section>
  <div class="log_img">
    <br> <br><br>
    <div class="box1">
        <h1 style="text-align: center; font-size: 35px;font-family: Lucida Console;">Library Management System</h1><br>
        <h1 style="text-align: center; font-size: 25px;">Librarian Login Form</h1><br>
      <form name="login" action="log.php" method="post">
        <br><br>
        <div class="login">
          <input type="text" name="username" placeholder="Username" required=""> <br><br>
          <input type="password" name="password" placeholder="Password" required=""> <br><br>
          <button>Login</button></div>
      </form>
      <p style="color: white; padding-left: 15px;">
        <br><br>
      
      </p>
    </div>
  </div>
</section>

</body>
</html>