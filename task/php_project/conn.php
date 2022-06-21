<?php 
include 'toastrlink.php';
// $conn = mysqli_connect('localhost','root','','dbname');
// define("HOST", "localhost:3308");
// define("USERNAME", "root");
// define("PASSWORD", "");
// define("DBNAME", "php_project");
// $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DBNAME);
// if ($conn) {
// 	// echo "Connection Successfully.";
// }else{
// 	echo "Connection Failed!!";
// }

$serve = "localhost";
$username = "root";
$password = "";
$dbname = "php_project";

$conn = mysqli_connect($serve,$username,$password,$dbname);

if($conn)
{
	?>
	<script type='text/javascript'>
   toastr.success('connection Successfully');
	</script>
	<?php
}else
{
	?>
	<script type='text/javascript'>
   toastr.info('not connection Successfully');
	</script>
	<?php
}

 ?>