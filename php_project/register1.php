<!-- header file include -->
<?php
session_start();
?>
<?php
include_once("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style>
      h1 {
        font-family: sans-serif;
        margin: 100px auto;
        color: #228B22;
        text-align: center;
        font-size: 30px;
        max-width: 600px;
        position: relative;
      }
      h1:before {
        content: "";
        display: block;
        width: 130px;
        height: 5px;
        background: #191970;
        left: 0;
        top: 50%;
        position: absolute;
      }
      h1:after {
        content: "";
        display: block;
        width: 130px;
        height: 5px;
        background: #191970;
        right: 0;
        top: 50%;
        position: absolute;
      }
    </style>
</head>
<body>

<?php
include 'conn.php';
if(isset($_POST['submit']))
{
	$username = mysqli_real_escape_string($conn,$_POST['username']);
	echo $username;
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$mobile = mysqli_real_escape_string($conn,$_POST['mobile']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);

	$pass = password_hash($password,PASSWORD_BCRYPT);
	$cpass = password_hash($cpassword,PASSWORD_BCRYPT);

	$emailquery = "SELECT * FROM students where email = '$email'";
	$query = mysqli_query($conn,$emailquery);

	$emailcount = mysqli_num_rows($query);

	if($emailcount>0)
	{
		echo "email all ready exits";
		
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
					window.location.replace('login1.php');
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
		<div class="row">
				<div class="col-sm-12">
				<!-- Carousel -->
				<div id="demo" class="carousel slide" data-bs-ride="carousel">
				  <!-- Indicators/dots -->
				  <div class="carousel-indicators">
				    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
				    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
				    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
				  </div>
				  
				  <!-- The slideshow/carousel -->
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="image/st.jpg" alt="Los Angeles" class="d-block" style="width:100%;height:300px">
				    </div>
				    <div class="carousel-item">
				      <img src="image/st1.jpg" alt="Chicago" class="d-block" style="width:100%;height:300px;">
				    </div>
				    <div class="carousel-item">
				      <img src="image/st2.jpg" alt="New York" class="d-block" style="width:100%;height:300px;">
				    </div>
				  </div>
				  
				  <!-- Left and right controls/icons -->
				  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
				    <span class="carousel-control-prev-icon"></span>
				  </button>
				  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
				    <span class="carousel-control-next-icon"></span>
				  </button>
				</div>
			</div>
		</div>
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
						<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
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
					<a href="login1.php">Login Page</a>
					</div>

				</div>
			</div>
		</div>
</div>
<script src="custom/js/customjs/jquey.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="custom/js/customjs/register.js"></script>
</body>
</html>
<!-- footer file include -->
<?php 
include_once("footer.php"); 
?>