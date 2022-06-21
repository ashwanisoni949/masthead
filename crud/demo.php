<?php
if($_SERVER['REQUEST_METHOD'])
if(empty($_POST['name'])){
    $username="please enter the username";
}
if(empty($_POST['password']))
{
    $pass_msg="please enter the password";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		
		.outer
		{
			height: 500px;
			width: 400px;
            margin:10px auto;
			background-color: skyblue;
			padding: 20px 30px;
			box-sizing: border-box;
		}
		.outer input
		{
			height: 30px;
			width: 100%;
			margin-bottom: 16px;
		}
		.outer .btn
		{
			height: 35px;
			width: 102%;
			background-color: orangered;
			border: none;
			color: #fff;
			font-size: 16px;
		}
		.outer h2
		{
			text-align: center;
			color: orangered;
		}

	</style>
</head>
<body>
	<div class="outer">
		<h2>REGISTRATION FORM</h2>
		<form id="ajax_form">
			Name <br><input type="text" placeholder="Enter name" name="name" id="name"><br>
			<input type="hidden"  name="id" id="id">

            <!-- <span><?php echo $username; ?></span> -->
			Email <br><input type="email" placeholder="Enter email" id="email" name="email"><br>
            <!-- <span><?php echo $pass_msg; ?></span> -->
			Mobile No <br><input type="number" placeholder="Enter Mobile no" id="mobile" name="mobile"><br>
			Password <br><input type="password" placeholder="Enter Password" id="pass" name="pass"><br>
			<input type="submit" value="submit" class="btn">
		</form>
	</div>
    <br>
    <div id="showdata">
    
    </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(Document).ready(function(){
            showdata();
        });

		function showdata(){
			$.ajax({
                url:'showdata.php',
                type:'get',
                success:function(response){
                    $('#showdata').html(response);
                }
            });
		}

        $('#ajax_form').on('submit',function(e){
            e.preventDefault();
            jQuery.ajax({
                url:'insert.php',
                type:'post',
                data: new FormData(this),
                processData:false,
                contentType:false,
                success:function(response){
                    var resp = JSON.parse(response);
                    if(resp.status == true && resp.status_code == 200){
                        alert(resp.message);
                        $('#ajax_form').trigger('reset');
						showdata();
                    }else if(resp.status == false && resp.status_code == 201){
                        alert(resp.message);
						showdata();
                    }
                    
                }
            });
        });
    var deleteData=(id)=>
	{
		// alert(id); //this
		jQuery.ajax({
                url:'delete.php',
                type:'post',
                data: {id:id},//right side id must be same 
                // processData:false,
                // contentType:false,
                success:function(response){
                    var resp = JSON.parse(response);
                    if(resp.status == true && resp.status_code == 200){
                        alert(resp.message);
                        $('#ajax_form').trigger('reset');
						showdata();
                    }else if(resp.status == false && resp.status_code == 201){
                        alert(resp.message);
						showdata();
                    }
                    
                }
            });
	}
	var edit=(id)=>
	{
		// alert(id); //this
		jQuery.ajax({
                url:'edit.php',
                type:'POST',
                data: {id:id},
                success:function(response){
					console.log(response);
                    var resp = JSON.parse(response);
                    if(resp.status == true && resp.status_code == 200){
                       $("#name").val(resp.data.name);
					   $("#email").val(resp.data.email);
					   $("#id").val(resp.data.id);
					   $("#mobile").val(resp.data.mobile);
					   $("#pass").val(resp.data.password);//password it means response 
                    }else if(resp.status == false && resp.status_code == 201){
                        alert(resp.message);
						showdata();
                    }
                    
                }
            });
	}
    </script>
</body>
</html>