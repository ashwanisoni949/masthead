<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="custom/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</head>
<body>
	<div class="container mt-5">
		<h1 class="alert-info text-center mb-5 p-3">
			AJAX --PHP --BOOTSTRAP 5 --JQUERY(CRUD)
		</h1>
		<div class="row">
			<form action="" id="myform" class="col-sm-5">
				<h3 class="alert-warning text-center p-2">Add/Update Student</h3>
				<div>
					<label for="nameid" class="form-label">Name</label>
					<input type="text" class="form-control" id="nameid"/>
				</div>
				<div>
					<label for="emailid" class="form-label">Email</label>
					<input type="email" class="form-control" id="emailid"/>
				</div>
				<div>
					<label for="passwordid">Password</label>
					<input type="password" id="passwordid" class="form-control"/>
				</div>
				<div class="mt-5">
					<button type="submit" class="btn btn-primary" id="btnadd">Save</button>
				</div>
				<div id="msg"></div>
			</form>

			<div class="col-sm-7 text-center">
				<h3 class="alert-warning p-2">Show Student Information</h3>
				<table class="table">
					<thead>
						<tr>
							<th scope="col">Id</th>
							<th scope="col">Name</th>
							<th scope="col">Email</th>
							<th scope="col">Password</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="tbody"></tbody>
				</table>
			</div>
		</div>
	</div>












	<script src="custom/js/bootstrap.min.js"></script>
	<script src="custom/js/customjs/ajax.js"></script>
	<script src="custom/js/customjs/popper.js"></script>
	<script src="custom/js/customjs/jquey.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<!-- <link rel="stylesheet" href="custom/js/bootstrap.min.js">
	<link rel="stylesheet" href="custom/js/customjs/ajax.js"> -->
</body>
</html>