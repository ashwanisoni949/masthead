<?php 
include __DIR__.'/db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM register where id=$id";
$run = mysqli_query($conn, $sql);

	// print_r($result);
	// echo $result['name'];
// }
?>	

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Edit Record</h2>
	<hr>
	<form action="updateController.php" method="POST" >
		<?php while ($result = mysqli_fetch_assoc($run)) { ?>
			<input type="hidden" name="id" value="<?php echo $result['id'] ?>">
		Name : <br>
		<input type="text" name="name" value="<?php echo $result['name'] ?>"><br><br>
		Mobile no : <br>
		<input type="number" name="mobile" value="<?php echo $result['mobile'] ?>"><br><br>
		Email : <br>
		<input type="email" name="email" value="<?php echo $result['email'] ?>"><br><br>
		
		<input type="submit" value="Update">
	<?php } ?>
	</form>
</body>
</html>