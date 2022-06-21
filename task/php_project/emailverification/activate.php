<?php

// echo "hii my name is ashwani";
include '../conn.php';
if(isset($_GET['token']))
{
	$token = $_GET['token'];
	$updatequery = "UPDATE students set status='active' where token='$token'";
	$query = mysqli_query($conn,$updatequery);
	if($query)
	{
		if(isset($_SESSION['msg'])){
			$_SESSION['msg'] = "Account updated successfully";
			header('location:login2.php');
		}else
		{
			$_SESSION['msg'] = "you are logged out";
			header('location:login2.php');
		}
	}else
	{
		$_SESSION['msg'] = "account not updated";
		header('location:register2.php');
	}
}



?>