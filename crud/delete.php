<?php
$conn=mysqli_connect('localhost:3306','root','','crud');
$id=$_POST['id'];
$sql="DELETE from student where id='$id';";
if(mysqli_query($conn,$sql))
{
    $rasp = array(
        'status'=>true,
        'status_code'=>200,
        'message'=>'Data delete Successfully'
    );
}else
{
    $rasp = array('status'=>false,
    'status_code'=>201,
    'message'=>'somthings is wrongs'
);

}
echo json_encode($rasp);
?>