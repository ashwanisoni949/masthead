<!-- header file include -->
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
		<div class="row mt-5">
			<div class="col-sm-7">
				<div class="row bg-info bg-opacity-25 p-5">
					<h2 class="text-center text-danger fs-3 fw-bold fst-underline">Please Fill this blank</h2>
					<div class="col-sm-6">
						<label for="address">First Name</label>
					<div class="input-group mb-3">
				  <span class="input-group-text text-danger" id="basic-addon1"><i class="fa fa-user"></i></span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="fname">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Last Name</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="lname">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Email Id</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="email" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="email">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Moible NO</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="mobile">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Password</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="password" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="password">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Pin</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="number" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="pin">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Address</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" id="address">
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">Country</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <select name="" id="country" class="form-control">
				  	<option value="">--Select Option--</option>
				  	<option value="1">India</option>
				  	<option value="2">Pakistan</option>
				  	<option value="3">America</option>
				  </select>
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">State</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <select name="" id="state" class="form-control">
				  	<option value="">--Select Option--</option>
				  	<option value="1">Uttar Pradesh</option>
				  	<option value="1">Madhy Pradesh</option>
				  	<option value="1">Rajsthan</option>
				  </select>
				</div>
					</div>
					<div class="col-sm-6">
						<label for="address">City</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <select name="" id="city" class="form-control">
				  	<option value="">--Select Option--</option>
				  	<option value="1">Ballia</option>
				  	<option value="1">Lucknow</option>
				  	<option value="1">Rajsthan</option>
				  </select>
				</div>
					</div>
					<div class="col-sm-12">
						<label for="address">Message</label>
					<div class="input-group mb-3">
				  <textarea name="" id="msg" class="form-control" cols="10" rows="4"></textarea>
				</div>
				<!-- <button type="submit" id="save_data" class="float-center btn btn-warning text-center text-danger fw-bold rounded">Register</button> -->
				<input type="submit" id="save_data" class="float-center btn btn-warning text-center text-danger fw-bold rounded" value="Register">
					</div>

				</div>

			</div>
			<div class="col-sm-5">
				<h3 class="text-center text-danger">USER INTPUTED POINTS</h3>
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