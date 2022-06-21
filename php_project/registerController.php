<?php
include 'conn.php';
if(isset($_POST['submit']))
{
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

	$pass = password_hash($password,PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword,PASSWORD_BCRYPT);

	$emailquery = "SELECT * FROM students where email = '$email'";
	$query = mysqli_query($conn,$emailquery);

	$emailcount = mysqli_num_rows($query);

	if($emailcount >0)
	{
		echo "email all ready exits";
	}else
	{
		if($password === $cpassword)
		{
			$insert = "INSERT INTO students(name,email,phone,password,cpassword) VALUES('$username','$email','$mobile','$pass','$cpass')";
			$iquery = mysqli_query($conn,$insert);
			if($iquery)
			{
				?>
				<script>
					alert('data insert successfully');
				</script>
				<?php
			}else
			{
				?>
				<script>
					alert('data not insert successfully');
				</script>
				<?php
			}

		}else
		{
			echo "password are not matching";
		}
	}
}

?>