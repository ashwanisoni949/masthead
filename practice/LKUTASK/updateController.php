<?php 
include __DIR__.'/db.php';

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$id = $_POST['id'];

$sql = "UPDATE register SET name='$name', mobile= '$mobile', email='$email' where id = '$id'";
$run = mysqli_query($conn, $sql);
if ($run) {
	echo "<script>alert('Data Updated Successfully')</script>";
	echo "<script>location.href = 'show.php'</script>";
}else{
	echo "<script>alert('Data cannot Updated)</script>";
}


 ?>