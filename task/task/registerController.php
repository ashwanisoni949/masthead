<?php
session_start();
if(isset($_POST['submit']))
{
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);
	$pass = password_hash($password,PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword,PASSWORD_BCRYPT);
	$emailquery = "SELECT * FROM students where email = '$email' ";
	$query = mysqli_query($conn,$emailquery);
	$aa=mysqli_fetch_object($query);
	// print_r($aa->id);
	$demo = $aa->id;
	// echo $demo;
	$emailcount = mysqli_num_rows($query);
	if($emailcount>0)
	{
		// echo "all ready exits";
		if($password === $cpassword)
		{
			$insert = "INSERT INTO count1(id,name,email,phone,password,cpassword) VALUES('$demo','$username','$email','$mobile','$pass','$cpass')";
			$iquery = mysqli_query($conn,$insert);
			// echo "<pre>";
			// print_r($insert);
			// echo "</pre>";
			if($iquery)
			{
			    $sql = "SELECT * FROM count1 where id = '$demo'";
			    $sql1 = mysqli_query($conn,$sql);
			    $sqli2 = mysqli_fetch_object($sql1);
			   
			 

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

		
	}else
	{
		if($password === $cpassword)
		{
			$insert = "INSERT INTO students(name,email,phone,password,cpassword) VALUES('$username','$email','$mobile','$pass','$cpass')";
			$iquery = mysqli_query($conn,$insert);
			echo $iquery;
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