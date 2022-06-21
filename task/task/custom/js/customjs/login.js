$(document).ready(function(){
	$('#login_form').on('submit',function(e){
		e.preventDefault();
		$.ajax({
			url : "loginController.php",
			type : "POST",
			data : $(this).serialize(),
			success : function(data){
				console.log(data);
				// if(data != ""){
				// 	$('#error_message').html(data);
				// }else
				// {
				// 	// window.location = "register.php";
				// 	alert("failed");
				// }
			}
		});
	});
});