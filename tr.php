<?php
include'connection.php';
      if(isset($_POST['submit']))
       {
       	$Bookname=$_POST['book_name'];
       	$Bookauthor=$_POST['book_author'];
       	$Bookpublisher=$_POST['book_publisher'];
       

       	$query="Insert into books(book_name,book_author,book_publisher)values('$Bookname','$Bookauthor','$Bookpublisher')";
       	if (mysqli_query($db,$query)) {
       		echo "record submit";
       	}
       	else
       		echo"error".$query."".mysqli_error($db);
       	    mysqli_close($db);
       }
 ?>
