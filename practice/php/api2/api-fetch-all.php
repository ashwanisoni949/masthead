<?php

header('Content-Type: application/json');
header('Access-Control-Allow-Origin:*');

include 'conn.php';
$sql = "SELECT * FROM students";

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