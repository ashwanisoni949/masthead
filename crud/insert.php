<?php

$conn=mysqli_connect('localhost','root','','php');
$name=$_POST['name'];
$id=$_POST['id'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['pass'];
$password1=md5($password);
if(!empty($name) && !empty($password1) && !empty($mobile) && !empty($email)){
    if(empty($id)){
        $sql="INSERT INTO student(name,email,mobile,password) values('$name','$email','$mobile','$password1')";

    }else
    {
        $sql="UPDATE student set name='$name',email='$email',mobile='$mobile' where id='$id';";
    }
    if(mysqli_query($conn,$sql)){
        $rasp = array('status'=>true,'status_code'=>200,'message'=>'Data Insert Successfully');
    }else{
        $rasp = array('status'=>false,'status_code'=>201,'message'=>"Can't Insert Data");
    }
}else{
    $rasp = array('status'=>false,'status_code'=>201,'message'=>"Fill All Inputs");
}
echo json_encode($rasp);



?>