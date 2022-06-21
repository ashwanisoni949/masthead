<?php

 // {
 //        "id": "2",
 //        "student_name": "ashwnai",
 //        "age": "22",
 //        "city": "lucknow"
 // }
header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');
// associative array ke liye true kiya gya hia 
// kisi bhi file ko raw data raed kre lega php://input
$data = json_decode(file_get_contents("php://input"),true);
// {
// 	id : 2
// }
$student_id = $data['sid'];
include 'conn.php';
$sql = "SELECT * FROM students where id = {$student_id}";

$result = mysqli_query($conn,$sql) or die("SQL query failed");

if(mysqli_num_rows($result) >0)
{
	// mysqli_fetch_all  MYSQLI_ASSOC ye aapka associative me convernt kregi
  $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
  // now return json ka formate
  echo json_encode($output);
}else
{
	echo json_encode(array("message" => "no records found","status" => false));

}


?>