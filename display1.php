
<table border="2">
  <tr>
    <td>RoomNo</td>
    <td>Check In</td>
    <td>Check Out</td>
    <td>Check Out Time</td>
    <td>Guest ID</td>
    <td>Adults</td>
    <td>Children</td>
    <td>Reservation Type ID</td>
    <td>Requests</td>
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
$sql = "select * from reservation
where check_in_date between '2022-08-22' and '2022-08-22'";
	$data = mysqli_query($conn, $sql);
while($info = mysqli_fetch_array( $data ))  
{  
 ?>
<tr> 
  <td> <?php echo  $info['RoomNo'];   ?> </td>
  <td> <?php  echo $info['check_in_date'];    ?> </td>
  <td> <?php echo  $info['check_out_date'];   ?> </td> 
  <td> <?php  echo $info['checkout_time'];    ?> </td>
  <td> <?php echo  $info['guest_id'];   ?> </td> 
  <td> <?php  echo $info['adults'];    ?> </td>
  <td> <?php echo  $info['children'];   ?> </td> 
  <td> <?php  echo $info['reservation_type_id'];    ?> </td>
  <td> <?php  echo $info['specialRequests'];    ?> </td>
</tr>
<?php 
}
 
 ?>
</table>

 