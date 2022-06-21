<?php
	
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
 header('Access-Control-Allow-Methods: POST');
header('Access-Control-Allow-Headers:Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods,Authorization,X-Request-With');

$data = json_decode(file_get_contents('php://input'));
// $name = $data['sname'];
// $age = $data['sage'];
// $city = $data['scity'];


require 'conn.php';


$sql = "INSERT INTO students(student_name,age,city) VALUES('$data->student_name','$data->age','$data->city')";
if(mysqli_query($conn,$sql))
{
	echo json_encode(array("message" => "student record insert","status" => true));
}else
{
	echo json_encode(array("message" => "no records found","status" => false));

}



?>