$(document).ready(function(){
	
    // table load 
    // function loadTable(){
    // 	$.ajax({
    // 		url : "ajax_load.php",
    // 		type : "POST",
    // 		success : function(resp){
    // 			$('#table-data').html(data);
    // 		}
    // 	});
    // }
    // loadTable();
});
    $('#save_data').on("click",function(e){
    	e.preventDefault();
    	var fname = $('#fname').val();
    	var lname = $('#lname').val();
    	var email = $('#email').val();
    	var mobile = $('#mobile').val();
    	var password = $('#password').val();
    	var pin = $('#pin').val();
    	var address = $('#address').val();
    	var country = $('#country').val();
    	var state = $('#state').val();
    	var city = $('#city').val();
    	var msg = $('#msg').val();
    	$.ajax({
    		url : "insert_data.php",
    		type : "POST",
    		data : {
    			first_name : fname,
    			last_name : lname,
    			email_id : email,
    			mobile_no : mobile,
    			password : password,
    			pin_no : pin,
    			address : address,
    			country_select : country,
    			state_select : state,
    			city_select : city,
    			message : msg,
    		},
    		success : function(res){
    			// console.log(res);
    			// loadTable();
    			if(res == 1){
    				// loadTable();
    				window.location.href = "login.php";
    			}else
    			{
    				alert('cant save record');
    			}
    		}
    	});
    });

    // $('#save_data').on("click",function(e){
    // 	e.preventDefault();
    // 	alert(1);
    // })