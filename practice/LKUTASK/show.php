<?php 

error_reporting(0);
session_start();
if (!isset($_SESSION['validUser'])) {
	header('location:index.php');
}
include __DIR__.'/db.php';

$sql = "SELECT * FROM register";
$run = mysqli_query($conn, $sql);
if ($result = mysqli_num_rows($run)) {
	
		// print_r($row);



 ?>
 <style>
 	img{
 		height: 100px;
 		width: 80px;

 	}
 	#logout{
 		float: right;
 		display: block;
 	}

 </style>
 <a href="register.php" id="back">BACK TO HOME</a>
 <a href="logout.php" id="logout">LOGOUT</a> 
<table border="1" cellpadding="10px" cellspacing="0" width="100%">
	<tr>
		<th>#</th>
		<th>Name</th>
		<th>Mobile</th>
		<th>Email</th>
		<th>Image</th>
		<th colspan="2">Action</th>
	</tr>
	<?php while ($row = mysqli_fetch_assoc($run)) { ?>
	<tr align="center">
		<td><?php echo $row['id']; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['mobile']; ?></td>
		<td><?php echo $row['email']; ?></td>
		<td><img src="upload/<?php echo $row['image']; ?>" alt="image not found"></td>
		<td><a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a></td>
		<td><a href="editimage.php?id=<?php echo $row['id']; ?>">Change Image</a></td>

	</tr>
	<?php 	}
} else{
	echo "Record Not Found";
}


?>
</table>