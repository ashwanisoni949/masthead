<?php 
include __DIR__.'/db.php';
$id = $_GET['id'];
$sql = "SELECT * FROM register where id=$id";
$run = mysqli_query($conn, $sql);

	// print_r($result);
	// echo $result['name'];
// }

?>

<h2>Change Image</h2>
<form action="imageController.php" method="POST" enctype="multipart/form-data">
	<?php while ($result = mysqli_fetch_assoc($run)) { ?>
		<input type="hidden" name="id" value="<?php echo $result['id'] ?>">
		<input type="file" name="newimage" value="<?php echo $result['image'] ?>"><br><br>
		<input type="submit" value="Change Image">
	<?php } ?>
</form>