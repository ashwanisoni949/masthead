<?php 

require_once __DIR__.'/connect.php';


$id = $_POST['id'];
// $id = 88;
$query = "Select id,name,email from members where id=$id";

$res = mysqli_query($conn,$query);

$records = mysqli_fetch_assoc($res);

if($records){
    $resp = array(
        "status"=>true,
        "message"=>"Data found",
        "data"=>$records
    );
}
else{
    $resp = array(
        "status"=>false,
        "message"=>"Data not found"
    );
}

echo json_encode($resp);




?>