<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <!-- tables -->
<link rel="stylesheet" href="//cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
	<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.bootstrap5.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css"/> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Hello, world!</title>
    <script>
    	var siteUrl = "http://localhost:786/practice/ci/ci3111/";
    </script>
  </head>
  <body>
    <div class="container">
    	<div class="row">
    		<div class="col-sm-12 mt-5">
    			<h1 class="text-center text-danger">Codeiginater Datatables Ajax Crud Tutorial</h1>
    			<hr style="background-color:blue;color:black;height:1px;">

    		</div>
    	</div>
		 <div class="row">
		    <div class="col-sm-12 mt-2">
		    			<!-- add records model -->
		     <!-- Button trigger modal -->
				<button type="button" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">
						  Add Record
						</button>

		<!-- Modal -->
			<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
			  <div class="modal-dialog">
			    <div class="modal-content">
			      <div class="modal-header">
			        <h5 class="modal-title" id="exampleModalLabel">Add Records</h5>
				        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				      </div>
				      <div class="modal-body">
							        <!-- Add Records Form -->
						        <form action="" method="post" id="form">
						        	<div class="form-group md-4">
						        		<label for="">Name</label>
						        		<input type="text" id="name" class="form-control">
						        	</div>
						        	<div class="form-group mt-4">
						        	<label for="">Email</label>
						        		<input type="email" id="email" class="form-control">
						        	</div>
						        </form>
								      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
				        <button type="button" class="btn btn-primary" id="add">Add Records</button>
				      </div>
				    </div>
				  		</div>
						</div>
		    		</div>
		    	</div>
		    	<div class="row mt-5">
		    		<div class="col-sm-12 mt-4">
		    			<div class="table-responsive">
		    			<table id="all_record" class="table table-striped">
		    				<thead>
		    					<tr>
		    						<th>ID</th>
		    						<th>NAME</th>
		    						<th>EMAIL</th>
		    						<th>ACTION</th>
		    					</tr>
		    				</thead>
		    			</table>
		    			</div>
		    		</div>
		    	</div>
    		</div>																

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <!-- tostr link js -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script src="//cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
  <!--   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.bootstrap5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.html5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/buttons/2.2.2/js/buttons.print.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.js"></script> -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Add Records -->
    <script>
    	
    	function clear_form(){
    		$('#form').trigger('reset');
    	}
    	
    	$(document).on('click',"#add",function(e){
    		e.preventDefault();
    		var name = $("#name").val();
    		var email = $("#email").val();
    		// alert(name+" "+email);
    		if(name == "" || email == ""){
    			alert("both field is required");
    		}else
    		{
    			$.ajax({
    				url : siteUrl + "insert",
    				type : "post",
    				dataType : "json",
    				data : {
    					name : name,
    					email : email
    				},
    				success : function(data){
    					// clear_form();
    					// console.log(data);
    					if(data.response == "success"){
    						$('#all_record').DataTable().destroy();
    						toastr["success"](data.message);
    						$('#exampleModal').modal('hide');
    					}else{
    						toastr["error"](data.message);
    					}
    				}
    			});
    			$('#form')[0].reset();
    		}
    	});

    	//FETCH records
    	function fetch()
    	{
    		$.ajax({
    			url : siteUrl+"fetch",
    			type : "post",
    			dataType : "json",
    			success : function(data){
    			var i = 1;
    				//datatable code start
    				$('#all_record').DataTable( {
    					"data" : data.posts,
    					"responsive" : true,
    					// dom: 'Bfrtip',
    					dom: "<'row'<'col-sm-12 col-md-4'l><'col-sm-12 col-md-4'B><'col-sm-12 col-md-4'f>>" +
       					 "<'row'<'col-sm-12'tr>>" +
       					 "<'row'<'col-sm-12 col-md-5'i><'col-sm-12 col-md-7'p>>",
   						 buttons: [
   					     'copy', 'excel', 'pdf'
   						 ],
			        	"columns": [
			            { "render" : function(){
			            	return a = i++;
			            } },
			            // { "data": "id" },
			            { "data": "name" },
			            { "data": "email" },
			            { "render" : function(data,type,row,meta){
			            	var a = `
			            		<a href="#" value="${row.id}" id="del" class="btn btn-sm btn-outline-danger"><i class="fas fa-trash"></i></a>
			            		<a href="#" value="${row.id}" id="edit" class="btn btn-sm btn-outline-success"><i class="fas fa-edit"></i></a>
			            	`;
			            	return a;
			            } }
       					 ]
    				} );
    				//datatable code end
    			}
    		});
    	}
    	fetch();

    	$(document).on("click","#del",function(e){
    		e.preventDefault();
    		
    		var del_id = $(this).attr('value');
    		// alert(del_id);
    		$.ajax({
    			// url : "<?php echo base_url(); ?>delete",
    			url : siteUrl + "delete",
    			type : "POST",
    			dataType : "json",
    			data : {
    				del_id : del_id
    			},
    			success : function(data){
    				console.log(data);
    			}
    		});
    	});
    </script>
  </body>
</html>