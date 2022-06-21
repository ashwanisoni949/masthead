<?php
 $id=$_GET['id'];
include_once'conn.php';
$id=$_GET['id'];
$sql="select * from neotbl where id='{$id}';";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($query)):

?>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
<div class="row">
	<div class="col-sm-4"></div>
	<div class="col-sm-4 border mt-5 bg-warning">
		<form action="" method="POST" enctype="multipart/form-data">
			<h3 class="mt-2">UPDATE RECORD</h3>
			Name:<input type="text" name="name" class="form-control"
			placeholder="<?php echo $row['name']; ?>"><br/>
			Email:<input type="email" name="email" class="form-control"
			placeholder="<?php echo $row['email']; ?>"><br/>
			Image:<input type="file" name="image" class="form-control"><br/>
			<input type="submit" class="btn btn-success" value="Submit" name="save">
		</form>
	</div>
	<div class="col-sm-4"></div>
</div>
</div>
</body>
</html>
<?php
endwhile;
?>
<?php
include_once('conn.php');
if(isset($_POST['save'])){
	$id=$_GET['id'];
	$name=$_POST['name'];
	$email=$_POST['email'];
	
	$files_arr=$_FILES['image'];
	$fname=$files_arr['name'];
	$type=$files_arr['type'];
	$size=$files_arr['size'];
	$error=$files_arr['error'];
	$tmp_path=$files_arr['tmp_name'];
	
	$fileinfo=pathinfo($fname);
	$extension=$fileinfo['extension'];
	$filename=$fileinfo['filename'];
	
	$image=$filename."_".time().".".$extension;
	$new_location=__DIR__.'/uploads/'.$filename."_".time().".".$extension;
				
	$sql="update neotbl set name='{$name}',email='{$email}',image='{$image}' where id='{$id}';";
	$query=mysqli_query($conn,$sql);
	if($query){
		if($error==0){

			if(move_uploaded_file($tmp_path,$new_location)){
				echo "file updated";
			}else{
				echo "file not updated";
			}
		}else{
			echo "error found";
		}
	}else{
		echo "data not updated";
	}
	
}

?>