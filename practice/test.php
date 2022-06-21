<?php

if(isset($_POST['readrecord']))
{
	$data = '<table class="table table-bordered table-striped">
	<tr>
	<th>No.</th>
	<th>No.</th>
	<th>No.</th>
	<th>No.</th>
	<th>No.</th>
	</tr>';
	$query = "SELECT * FROM corephp";
	$checked = mysqli_query($conn,$query);
	
}







?>