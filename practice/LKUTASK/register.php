<?php 
error_reporting(0);
session_start();
if (!isset($_SESSION['validUser'])) {
	header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h2>Student Register</h2>
	<a href="logout.php">logout</a>
	<hr>
	<form action="registerController.php" method="POST" enctype="multipart/form-data">
		Name : <br>
		<input type="text" name="name"><br><br>
		Mobile no : <br>
		<input type="number" name="mobile"><br><br>
		Email : <br>
		<input type="email" name="email"><br><br>
		Image : <br>
		<input type="file" name="image"><br><br>
		<input type="submit" value="Register">
	</form>
</body>
</html>