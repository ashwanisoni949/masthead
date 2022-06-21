<?php 


$conn = mysqli_connect("localhost","root","","Dbphp");


if($conn){
    //echo "connection successful";
}
else{
    echo "error".mysqli_connect_error($conn);
}




?>