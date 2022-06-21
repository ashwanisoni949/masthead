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
				<img src="image/st.jpg" height="300px" width="100%" alt="">
				</div>
			</div>
		</div>
		<div class="row mt-3">
			<div class="col-sm-12">
				<h1 class="text-center text-danger fw-bolder mt-3">Contact <span class="text-primary">Form</span></h1>
			</div>
		</div>
		<div class="row mt-5 justify-content-center float-center">
			<div class="col-sm-5">
				<div class="row bg-info bg-opacity-25 p-5">
					<h2 class="text-center text-danger fs-3 fw-bold fst-underline">Please Fill this blank</h2>
					<div class="col-sm-12">
						<label for="address">First Name</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
				</div>
					</div>
					<div class="col-sm-12">
						<label for="address">Last Name</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
				</div>
					</div>
					<div class="col-sm-12">
						<label for="address">Email Id</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
				</div>
					</div>
					<div class="col-sm-12">
						<label for="address">Moible NO</label>
					<div class="input-group mb-3">
				  <span class="input-group-text" id="basic-addon1">@</span>
				  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
				</div>
					</div>
					<div class="col-sm-12">
						<label for="address">Message</label>
					<div class="input-group mb-3">
				  <textarea name="" id="" class="form-control" cols="10" rows="4"></textarea>
				</div>
				<button type="submit" class="float-center btn btn-warning text-center text-danger fw-bold rounded">Register</button>
					</div>
				</div>

			</div>
		</div>
</div>
</body>
</html>
<!-- footer file include -->
<?php 
include_once("footer.php"); 
?>