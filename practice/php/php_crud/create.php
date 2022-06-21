<?php 

require_once __DIR__.'/connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$password = $_POST['password'];
$id = $_POST['id'];
$pattern = "/^[a-zA-Z0-9+_.-]+@[a-zA-Z0-9.-]+$/";
$pattern_mob = "/^[6-9]{1}[0-9]{9}$/";
$pass_pattern = "/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/";
if($name!="" && $email != "" && $mobile!="" ){

    if(!preg_match($pattern,$email) or (!preg_match($pattern_mob,$mobile))){
        $resp = array(
            "status"=>false,
            "message"=>"wrong email address or mobile number"
        );
        echo json_encode($resp);die;
    }
if(empty($id)){

$sql = "INSERT INTO members(`name`,email,mobile,`password`) VALUES('{$name}','{$email}','{$mobile}','{$password}')";
$msg = "Data inserted successfully";
}
else{
    $sql = "UPDATE members set name='{$name}',email='{$email}' where id=$id";
    $msg = "Data updated successfully";
}
if(mysqli_query($conn,$sql)){
    $resp = array(
        "status"=>true,
        "message"=>$msg
    );
}
else{
    $resp = array(
        "status"=>false,
        "message"=>"Something went wrong"
    );

}
}

else{
    $resp = array(
        "status"=>false,
        "message"=>"name and email are required and mobile are required"
    );
}
echo json_encode($resp);
