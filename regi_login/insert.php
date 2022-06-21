<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">
</head>
<body>
	<header>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-sm-5 mt-3 justify-content-center">
					<form action="dbinsert.php" enctype="multipart/form-data">
						<label for="" class="mt-4">Name</label>
						<div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                       </div>
                       <input type="text" class="form-control" name="name" id="name" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                      <label for="" class="mt-4">Email</label>
						<div class="input-group">
                        <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">@</span>
                       </div>
                       <input type="email" class="form-control" id="email" name="email" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                      </div>
                     <label for="" class="mt-4">Image </label>
						<div class="input-group">
                       
                        <span class="input-group-text" id="basic-addon1">@</span>
                       
                       <input type="file" class="form-control" id="file" name="file" placeholder="image">
                      </div>
                      <div class="mt-3">
                      	<button type="submit" class="btn btn-warning">Register</button>
                      </div>

				  </form>
				</div>
			</div>
		</div>
	</header>                    

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" ></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js"></script>
</body>
</html>