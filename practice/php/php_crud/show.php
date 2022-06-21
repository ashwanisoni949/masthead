

<?php 


require_once __DIR__.'/connect.php';



$sql = "SELECT * FROM members";


$res = mysqli_query($conn,$sql);

$tbl = "<table border='2' >
<th>Id</th>
<th>Name</th>
<th>EMAIL</th>
<th>Mobile</th>
<th>Password</th>
<th>EDIT</th>
<th>DELETE</th>

";

while($row=mysqli_fetch_array($res)){

$tbl .= 
"<tr>
<td>".$row['id']."</td>
<td>".$row['name']."</td>
<td>".$row['email']."</td>
<td>".$row['mobile']."</td>
<td>".$row['password']."</td>
<td><button onclick='edit_data(".$row['id'].")'>EDIT</button></td>
<td><button onclick='delete_data(".$row['id'].")'>DELETE</button></td>
</tr>";

}
echo $tbl;
?>




</table>


