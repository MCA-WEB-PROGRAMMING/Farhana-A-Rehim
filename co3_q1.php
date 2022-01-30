<?php
 
 $connect=mysqli_connect('localhost','root','','webdatabase');
 if($connect)
 {
     echo "connection established";
 }
 else
 {
     echo "connection not established";
 }
 $result=mysqli_query($connect,"select * from employees");
?>
<html>
    <head>
</head>
<body>
<h1>Employees</h1>
	<table width="500" cellpadding=5celspacing=5 border=1>
	<tr>
	<th>ID#</th>
	<th>First Name</th>
	<th>Last Name</th>
	<th>Department</th>
	<th>Email</th>
	</tr>
	<?php while($row=mysqli_fetch_array($result)):?>
	<tr>
	<td><?php echo $row['id'];?></td>
	<td><?php echo $row['fname'];?></td>
	<td><?php echo $row['lname'];?></td>
	<td><?php echo $row['dept'];?></td>
	<td><?php echo $row['email'];?></td>
	</tr>
	<?php endwhile;?> 
	</table>