<?php


$servername = "localhost";
$name = "root";
$password = "";
$dbname = "api_crud";

$conn = new mysqli($servername,$name,$password,$dbname);

if($conn->connect_error){
	die('Connection Failed'.$conn->connect_error);
}
//request start
$poetry = $_POST['poetry'];
$poetry_name = $_POST['poet_name1'];


$query = "INSERT INTO api(poetry_data,poet_name) values('{$poetry}','{$poetry_name}')";

$result = $conn->query($query);
if($result == 1)
{
	$response = array("status" =>"1","message" => "Poetry successfully insert");
}else{
	$response = array("status" => "0","message" => "Poetry not successfully insert");
}
echo json_encode($response);


?>