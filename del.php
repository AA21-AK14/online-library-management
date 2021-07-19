<?php

include'connection.php';
      if(isset($_POST['submit']))
       {
        $BookID=$_POST['book_id'];
       
       $quer="DELETE FROM `books` WHERE `books`.`book_id` = $BookID";
        if (mysqli_query($db,$quer)) 
        {

          echo  "Book deleted sucessfully";
        }
        else
          echo"error".$quer."".mysqli_error($db);
            mysqli_close($db);
       }
 ?>