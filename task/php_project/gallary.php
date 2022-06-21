<?php
include_once("header.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
		<div class="row">
			<div class="col-sm-12 p-3 bg-warning">
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12">
				<h1 class="text-center text-danger fw-bolder mt-3">Gallary</h1>

			</div>
		</div>
		<div class="row justify-content-evenly mt-4">
			<div class="col-sm-3 card-group">
				  <div class="card">
				    <img src="image/st.jpg" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				</div>
				<div class="col-sm-3 card-group">
				  <div class="card">
				    <img src="image/st.jpg" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				</div>
				<div class="col-sm-3 card-group">
				  <div class="card">
				    <img src="image/st.jpg" class="card-img-top" alt="...">
				    <div class="card-body">
				      <h5 class="card-title">Card title</h5>
				      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
				      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
				    </div>
				  </div>
				</div>
		</div>
		<div class="row mt-4 md-4">
			<div class="col-sm-12">
				<h1 class="text-center text-primary fw-bolder mt-3">All Images</h1>
			</div>
		</div>
		<div class="row justify-content-evenly mt-4">
			<div class="col-sm-2 zoom">
				<div class="card" >
				  <img src="image/st.jpg" class="card-img-top" alt="...">
				</div>
			</div>
			<div class="col-sm-2 zoom">
				<div class="card" >
				  <img src="image/st.jpg" class="card-img-top" alt="...">
				</div>
			</div>
			<div class="col-sm-2 zoom">
				<div class="card" >
				  <img src="image/st.jpg" class="card-img-top" alt="...">
				</div>
			</div>
			<div class="col-sm-2 zoom">
				<div class="card" >
				  <img src="image/st.jpg" class="card-img-top" alt="...">
				</div>
			</div>
			<div class="col-sm-2 zoom">
				<div class="card">
				  <img src="image/st.jpg" class="card-img-top" alt="...">
				</div>
			</div>
		</div>
	</div>
</body>
</html>
<?php 

include_once("footer.php"); 
?>