<!-- header file include -->

<!DOCTYPE html>
<html lang="en">
<head>
	<?php echo include_once("header.php"); ?>
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<img src="image/st.jpg" height="300px" width="100%" alt="">
		</div>
		<div class="row">
			<div class="col-sm-12 bg-warning p-3"></div>
		</div>
		<div class="row">
			<h2 class="text-center text-danger fw-bold fs-1 mt-4">Login Form</h2>
			<div class="col-sm-12 mt-4 inner">
				<div class="row justify-content-center mt-5">
					<span id="error_message"></span>
					<form action="" method="POST" id="login_form">
					<div class="col-sm-4 m-5">
						<label for="" class="fw-bold">Email ID</label>
						<div class="input-group">
					<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
				  <input type="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="email"> 
						</div>
						<label for="" class="fw-bold mt-4">Password </label>
						<div class="input-group">
					<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
				  <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" name="password">
						</div>
						<label for="" class="fw-bold mt-4">Email ID</label>
						<div class="input-group">
					<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
						</div>
						<label for="" class="fw-bold mt-4">Email ID</label>
						<div class="input-group">
					<span class="input-group-text" id="basic-addon1"><i class="fa fa-phone"></i></span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
						</div>
						<div class="mt-4">
						<button type="submit" class="btn btn-warning text-center float-center rounded fw-bold" value="Login" name="submit">Login</button>	
						</div>
						
					</div>
					</form>
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