<table border="2">
  <tr>
    <td>Room Facilities</td>
  
  </tr>

<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "hotelsystem";
 
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
die("Sorry, Your Connection failed: " . mysqli_connect_error());
}
$sql = "select roomTypeID, roomFacilities from room_type";
	$data = mysqli_query($conn, $sql);
while($info = mysqli_fetch_array( $data ))  
{  
 ?>
<tr> 
  <td> <?php  echo $info['roomFacilities'];    ?> </td>

</tr>
<?php 
}
 
 ?>
</table>

 