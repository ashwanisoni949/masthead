<?php
// include_once("conn.php");

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email_id = $_POST['email_id'];
$mobile_no = $_POST['mobile_no'];
$password = $_POST['password'];
// $pin_no = $_POST['pin_no'];
// $address = $_POST['address'];
// $country_select = $_POST['country_select'];
// $state_select = $_POST['state_select'];
// $city_select = $_POST['city_select'];
// $message = $_POST['message'];

$conn = mysqli_connect("localhost:3308","root","","php_project") or die("Connection Failed");
$sql = "INSERT INTO students(fname,lname,email,mobile,password) VALUES('{$first_name}','{$last_name}','{$email_id}','{$mobile_no}','{$password}')";

 $result = mysqli_query($conn,$sql) or die('SQl query failed.');
 if($result){
 	echo 1;
 }else
 {
 	echo 0;
 }
?>