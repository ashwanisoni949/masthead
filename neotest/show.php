<html>
<head>

</head>
<body>
<h1 style="text-align:center;color:red;">SHOW DATA</h1>
<table border="2" width="100%" cellspacing="0">
	<tr>
	<th>SR.</th>
	<th>ID</th>
	<th>NAME</th>
	<th>EMAIL</th>
	<th>IMAGE</th>
	<th>DELETE</th>
	<th>UPDATE</th>
	</tr>
	
	<?php
		include_once'conn.php';
		
		$sql="SELECT * FROM neotbl;";
		$query=mysqli_query($conn,$sql);
		$i=1;
		while($row=mysqli_fetch_assoc($query)):
		
		
		?>
		<tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><?php echo $row['image']; ?></td>
		<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
		<td><a href="update.php?id=<?php echo $row['id']; ?>">Edit</a></td>
		
		<?php
		
		$i=$i+1;
		endwhile;
		?>
		</tr>
		
</table>
		
</body>
</html>