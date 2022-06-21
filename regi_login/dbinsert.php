<?php

include "conn.php";

if(isset($_POST['submit']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$file = mysqli_real_escape_string($conn,$_FILES['file']);

}
?>