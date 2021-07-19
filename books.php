<?php
     include"nav2.php";
     include"connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Books</title>
	<style> 
		table{border-collapse:;}
table,th,td
{
border:3px solid black;}
th,td{
 padding: 20px 70px 10px 115px;
 text-align: center;
}
}</style>
</head>
<body>
	
	<h4 style="font-size:60px;text-align:right;">List Of Books</h4>
		<table>
			 <tr >
				
				 <th>ID</th>
				<th>Book-Name</th>
				<th> Authors Name </th>
				<th> Publisher</th>
				<th> Quantity</th>
				<th> Status</th>
			</tr>
		<?php	
				
			$res=mysqli_query($db,"select * from books ;");

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['book_id']; echo "</td>";
				echo "<td>"; echo $row['book_name']; echo "</td>";
				echo "<td>"; echo $row['book_author']; echo "</td>";
				echo "<td>"; echo $row['book_publisher']; echo "</td>";
				echo "<td>"; echo $row['book_quantity']; echo "</td>";
				echo "<td>"; echo $row['book_status']; echo "</td>";
				
				echo "</tr>";
			}
		echo "</table>";
	?>
	
</body>
</html>