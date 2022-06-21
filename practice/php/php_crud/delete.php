<?php 


require_once __DIR__.'/connect.php';

$id = $_POST['id'];
$query = "DELETE from members Where id = $id";

if(mysqli_query($conn,$query)){
    $data = array(
        "status"=>true,
        "message"=>"Record deleted succrssfully"
    );
}

else{
    $data = array(
        "status"=>false,
        "message"=>"Record not deleted successfully"
    );
}
echo json_encode($data);








?>