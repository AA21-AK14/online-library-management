<?php
     include"nav4.php";
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
 padding: 20px 70px 10px 60px;
 text-align: center;
}
}</style>
</head>
<body>
	
	<h4 style="font-size:60px;text-align:center;">List Of Issued Books</h4>
		<table>
			 <tr >
				
				 <th>Issuebook ID</th>
				<th>Book Id</th>
				<th> Student Id </th>
				<th> Issue Date</th>
				<th> Return Upto</th>
				<th> Return Date</th>

				<th> Issue book Status</th>
			</tr>
		<?php	
				
			$res=mysqli_query($db,"select * from issuebook;");

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['issuebook_id']; echo "</td>";
				echo "<td>"; echo $row['book_id']; echo "</td>";
				echo "<td>"; echo $row['student_id']; echo "</td>";
				echo "<td>"; echo $row['issue_date']; echo "</td>";
				echo "<td>"; echo $row['return_upto']; echo "</td>";
				echo "<td>"; echo $row['return_date']; echo "</td>";
				echo "<td>"; echo $row['issuebook_status']; echo "</td>";
				
				echo "</tr>";
			}
		echo "</table>";
	?>
	
</body>
</html>