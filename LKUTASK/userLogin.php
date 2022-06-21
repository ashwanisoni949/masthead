<?php 

include __DIR__.'/db.php';

$name = $_POST['username'];
$password = $_POST['password'];

$query = "SELECT * FROM user_login WHERE name = '$name' AND password = '$password'";
$run = mysqli_query($conn,$query);
$result = mysqli_fetch_assoc($run);
 
if (is_array($result)) {
	session_start();
	$_SESSION['validUser'] = $result['name'];
	header("location:register.php");

}else{
	echo "<script>alert('Username or Password incorrect!!')</script>";
	echo "<script>location.href = 'index.php'</script>";
}


 ?>