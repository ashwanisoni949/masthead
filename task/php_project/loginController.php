<?php

if(isset($_POST['email'])){

	// $conn = mysqli_connect("localhost:3308","root","","php_project") or die('Connection failed');
	$conn = new PDO("mysql:host=localhost:3308;dbname=php_project","root","");
	

	$query = "SELECT * FROM students where email = '".$_POST['email']."'";

	$statement = $conn->prepare($query);
	$statement->execute();

	$total_row = $statement->rowCount();
	$output = "";
	if($total_row >0)
	{
		// store $result associative data
		$result = $statement->fetchAll();
		foreach($result as $key=>$row){
			
			if($_POST['password'] == $row["password"]){
					// print_r($_POST['password'] == $row["password"]);
				header('Location: http://localhost:786/task10/admin.php');
			}else
			{
				$output = '<label class="text-danger">Wrong password</label>';
			}
		}
	}else
	{
		$output = '<label class="text-danger">Wrong email</label>';
	}
	echo $output;
}


?>