<!-- header file include -->

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <link rel="stylesheet" type="text/css" href="custom/css/customcss/webpage1.css"> -->
	<link rel="stylesheet" href="custom/css/bootstrap.min.css">
	<link rel="stylesheet" href="custom/fonts/font-awesome.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<body>

<?php
include 'conn.php';
error_reporting(0);
// include 'registerController.php';
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
			    $sql = "SELECT count(email) as total FROM count1 where email ='$email'";
			    $sql1 = mysqli_query($conn,$sql);
			    $sqli2 = mysqli_fetch_object($sql1);
			    echo "User ";
			    echo $sql3 = $sqli2->total;
			    echo " time modify";
			    

			   
			 

			}else
			{
				?>
				<script type='text/javascript'>
   			toastr.info('data not be inserted');
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
			<script type='text/javascript'>
   		toastr.success('1 Time Register successfully');
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



	<div class="container-fluid">
	
		<div class="row mt-3">
			<div class="col-sm-12">
				<h1 class="text-center text-danger fw-bolder mt-3">Register <span class="text-primary">Now</span></h1>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<!-- same page then we use -->
						<form method="POST">
							<input type="hidden" id="user_id" name="user_id">
						<label for="address">Full Name</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="username" name="username" required>
					</div>
					<label for="address">Email Address</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="email" name="email" required>
					</div>
					<label for="address">Phone Number</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="mobile" name="mobile" required>
					</div>
					<label for="address">Create Password</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="password" name="password" required>
					</div>
					<label for="address">Repeat Password</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="cpassword" name="cpassword" required>
					</div>
					<div>
						<button type="submit" value="Register" class="btn btn-warning" name="submit">Register</button>
					</div>
					</form>
					</div>

				</div>
			</div>
		</div>
</div>
<script src="custom/js/customjs/jquey.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="custom/js/customjs/register.js"></script>

<script src="custom/js/bootstrap.min.js"></script>
<script src="custom/js/customjs/popper.js"></script>
<script src="custom/js/customjs/jquey.js"></script>
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
</body>
</html>
<!-- footer file include -->