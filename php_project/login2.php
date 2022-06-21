<!-- header file include -->
<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo include_once("header.php"); ?>
	<?php echo include_once("toastrlink.php"); ?>
</head>
<body>
<?php
include 'conn.php';

if(isset($_POST['login'])){
	$email = mysqli_real_escape_string($conn,$_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);

	$emailsearch = "SELECT * FROM students where email = '$email' and status='active'";

	$query = mysqli_query($conn,$emailsearch);

	$emailcount = mysqli_num_rows($query);
	if($emailcount)
	{
		$email_pass = mysqli_fetch_assoc($query);
		// $email_pass['password']; //that means jo bhi db email se match krta hai uska passsword fetch krta hai 
		$db_pass = $email_pass['password'];
		// where username ke sthan par kuch bhi de skte ahi 
		$_SESSION['username'] = $email_pass['name'];


		$pass_decode = password_verify($password,$db_pass);

		if($pass_decode){
			   // header("Location: http://localhost:786/task10/webpage1.php");
			?>
			<script>
				location.replace("admin.php");
				 toastr.info('User login..!');
			</script>
			<?php
			echo "login successfully";
		}else
		{
			echo "password incorrect";
		}
	}else
	{
		echo "invalid email id";
	}

}


?>


	<div class="container-fluid">
		<div class="row">
			<img src="image/st.jpg" height="300px" width="100%" alt="">
		</div>
		<div class="row">
			<div class="col-sm-12 bg-warning p-3"></div>
		</div>
		<div class="row">
			<h2 class="text-center text-danger fw-bold fs-1 mt-4">Login Form</h2>
			<div class="row">
			<div class="col-sm-12">
				<div class="row justify-content-center">
					<div class="col-sm-4">
						<!-- same page then we use -->
						<div class="row bg-success">
							<span class="text-light"><?php 
							if(isset($_SESSION['msg']))
							{
								echo $_SESSION['msg'];
							}else
							{
								echo $_SESSION['msg'] = "you are logged out . please login again";
							}
							 ?></span>
						</div>
						
						<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-3">
					<label for="address">Email Address</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="email" name="email" required>
					</div>
					<label for="address">Password</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="password" name="password" required>
					</div>
					<div>
						<button type="submit" value="Register" class="btn btn-warning md-3" name="login">Login</button>
					</div>
					</form>
					<a href="register1.php.php" class="mt-3">Register Page</a>
					</div>

				</div>
			</div>
		</div>
		</div>
	</div>
	<script src="custom/js/customjs/login.js"></script>
</body>
</html>
<!-- footer file include -->
<?php 

include_once("footer.php"); 
?>