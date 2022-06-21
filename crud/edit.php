<?php
$conn=mysqli_connect('localhost:3306','root','','crud');
$id=$_POST['id'];
$sql="SELECT * FROM student where id='$id';";
if($result1=mysqli_query($conn,$sql))
{
    $show=mysqli_fetch_assoc($result1);

    $rasp = array('status'=>true,'status_code'=>200,'message'=>
    'Data delete Successfully','data'=>$show);
}else
{
    $rasp = array('status'=>false,'status_code'=>201,'message'=>'somthings is wrongs');

}
echo json_encode($rasp);
?>