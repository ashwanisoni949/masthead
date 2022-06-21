<?php
	
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
 header('Access-Control-Allow-Methods: PUT');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Request-With');

$data = json_decode(file_get_contents('php://input'));
// $name = $data['sname'];
// $age = $data['sage'];
// $city = $data['scity'];


require 'conn.php';


$sql = "UPDATE students set student_name = '$data->student_name',age = '$data->age',city ='$data->city' WHERE id = '$data->sid';";
if(mysqli_query($conn,$sql))
{
	echo json_encode(array("message" => "student record updated","status" => true));
}else
{
	echo json_encode(array("message" => "Student Record not updated","status" => false));

}



?>