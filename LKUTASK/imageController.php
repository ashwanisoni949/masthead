<?php 
include __DIR__.'/db.php';
$id = $_POST['id'];

$files_arr = $_FILES['newimage'];

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

			$query = "UPDATE register SET image = '$new_file' WHERE id = '$id'";
			if ($run = mysqli_query($conn, $query )) {
				echo "<script>alert('Image Updated Successfully')</script>";
				echo "<script>location.href = 'show.php'</script>";
			}else{
				echo "<script>alert('Image Cannot Change')</script>";
			}
		}
 ?>