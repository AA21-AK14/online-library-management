<?php
     include"nav2.php";
     include"connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>LIBRARIANS</title>
	<style> 
		table{border-collapse:;}
table,th,td
{
border:3px solid black;}
th,td{
 padding: 20px 70px 10px 82px;
 text-align: center;
}
}</style>
</head>
<body>
	
	<h4 style="font-size:60px;text-align:right;">List Of Librarians</h4>
		<table>
			 <tr >
				
				<th> User_Id </th>
				<th> Name </th>
				<th> Father Name </th>
				<th> Email_Id </th>
				<th> Mobie_No </th>
				<th> Status </th>
			</tr>
		<?php	
				
			$res=mysqli_query($db,"select * from users ;");

			while($row=mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>"; echo $row['user_id']; echo "</td>";
				echo "<td>"; echo $row['name']; echo "</td>";
				echo "<td>"; echo $row['f_name']; echo "</td>";
				echo "<td>"; echo $row['email_id']; echo "</td>";
				echo "<td>"; echo $row['mobile_no']; echo "</td>";
				echo "<td>"; echo $row['active']; echo "</td>";
				
				
				echo "</tr>";
			}
		echo "</table>";
	?>
	
</body>
</html>