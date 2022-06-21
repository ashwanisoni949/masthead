<?php 

include __DIR__.'/connection.php';

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	 $username = $_POST['name'];
	 $mobile = $_POST['mobile'];
	 $email = $_POST['email'];
	 $files_arr = $_FILES['image'];

	 $name = $files_arr['name'];
	$type = $files_arr['type'];
	$error = $files_arr['error'];
	$tmp_path = $files_arr['tmp_name'];
	$size = $files_arr['size'];
	$file_info = pathinfo($name);


	$filename = $file_info['filename'];
	$file_ext = strtolower($file_info['extension']);

	$new_file = $filename."_".time().".".$file_ext;
		// echo $new_file;
		$new_location = __DIR__."/upload/{$new_file}";
		if (move_uploaded_file($tmp_path, $new_location)) {
			$sql = "INSERT INTO register(name,mobile,email,image)VALUES('$username','$mobile','$email','$new_file')";
			if ($run = mysqli_query($conn , $sql)) {
				echo "<script>alert('Registration Successfully')</script>";
				echo "<script>location.href = 'show.php'</script>";
			}else{
				echo "<script>alert('Registration Failed ! Please Try Agian ?')</script>";

			}
		}else{
			echo "<script>alert('Oops Somthing Went Wrong!!')</script>";

		}
}

 ?>