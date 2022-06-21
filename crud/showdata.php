<?php
$conn=mysqli_connect('localhost:3306','root','','crud');

$sql = "select * from student";
$result = mysqli_query($conn,$sql);
echo "<h2 align='center'>All Records</h2>"; 
 echo "<table border='1px' cellspacing='0px' cellpadding='10px' bgcolor='orange' width='100%'>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Email</th>
				<th>Mobile</th>
				<th>edit</th>
				<th>delete</th>

			</tr>";
if (mysqli_num_rows($result)>0) {
	while ($row = mysqli_fetch_assoc($result)) {
	echo "<tr>
     <td>".$row['id']." </td>
     <td>".$row['name']." </td>
     <td>".$row['email']." </td>
     <td>".$row['mobile']." </td>
     <td><button  onclick='edit(".$row['id'].")' href='#ajax_form'>edit</button></td>
     <td><button onclick='deleteData(".$row['id'].")'>delete</button></td>

     <tr>";
   }
   echo "</table>";
}