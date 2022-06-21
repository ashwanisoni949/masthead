<?php 
session_start();
if (isset($_SESSION['validUser'])) {
	
	session_destroy();
	// header("location:index.php");
	echo "<script>location.href = 'index.php'</script>";
}

 ?>