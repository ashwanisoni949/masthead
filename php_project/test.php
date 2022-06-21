<?php

if(isset($_POST['login']))
{
	$name = mysqli_real_escape_string($conn,$_POST['name']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);

	$emailsearch = "SELECT * FORM students where email = '$email'";
	$query = mysqli_query($conn,$emailsearch);
	$emailcount = mysqli_num_rows($query);
	if($emailcount)
	{
		$email_pass = mysqli_fetch_assoc($query);
		$_SESSION['userame'] = $email_pass['name'];
		$db_password = $email_pass['password'];
		$pass_decode = password_verify($password,$db_password);
		
	}
}


?>
