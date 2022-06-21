<?php
$id=$_GET['id'];
include_once'conn.php';

$sql="DELETE FROM neotbl WHERE id='{$id}';";
if(mysqli_query($conn,$sql)){
	echo "Record deleted successfullt";
}else{
	echo "Record not deleted";
}

?>