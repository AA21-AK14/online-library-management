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
border:3px solid black;
}
th,td{
 padding: 20px 130px 20px 130px;
 text-align: center;
}
}</style>
</head>
<body>
	
	<h4 style="font-size:60px;text-align:center;">List Of Students</h4>
		<table>
			 <tr >
				
				<th> ID </th>
				<th> STUDENT-Name </th>
				<th> STUDENT-MOBILE </th>
				<th> STUDENT-EMAIL </th>
				
			</tr>
		<?php	
				
			$res=mysqli_query($db,"select * from student ;");

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['student_id']; echo "</td>";
				echo "<td>"; echo $row['student_name']; echo "</td>";
				echo "<td>"; echo $row['student_mobile']; echo "</td>";
				echo "<td>"; echo $row['student_email']; echo "</td>";
				
				echo "</tr>";
			}
		echo "</table>";
	?>
	
</body>
</html>