<?php 
define("HOST", "localhost:3308");
define("USERNAME", "root");
define("PASSWORD", "");
define("DBNAME", "php_ajax_crud");
$conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
if ($conn) {
	// echo "Connection Successfully.";
}else{
	die(mysqli_error($conn));
	echo "Connection Failed!!";
}



 ?>