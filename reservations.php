<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page </title>
</head>
  
<body>
    <!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Hotel Reservation UI</title>
</head>
  
<body>
    <center>
        <h1>Make Reservation</h1>
  
        <form action="reservations.php" method="post">             
              
<p>
                <label for="RoomNo">Room Number:</label>
                <input type="number" name="RoomNo" id="RoomNo">
            </p>
                            
<p>
                <label for="check_in_date">Date of Check-In:</label>
                <input type="date" name="check_in_date" id="check_in_date">
            </p>
                
<p>
                <label for="check_out_date">Date of Check-Out:</label>
                <input type="date" name="check_out_date" id="check_out_date">
            </p>
               
<p>
                <label for="checkout_time">Check Out Time:</label>
                <input type="Time" name="checkout_time" id="checkout_time">
            </p>
                 
<p>
                <label for="guest_id">Guest ID:</label>
                <input type="Number" name="guest_id" id="guest_id">
            </p>
              
<p>
                <label for="adults">Adults:</label>
                <input type="number" name="adults" id="adults">
            </p>

 <p>
                <label for="children">Children:</label>
                <input type="number" name="children" id="children">
            </p>

<p>
                <label for="reservation_type_id">Reservation Type ID:</label>
                <input type="number" placeholder="1- Guaranteed reservation 2-Non-guaranteed reservation" name="reservation_type_id" id="reservation_type_id">
            </p>

<p>
                <label for="specialRequests">Special Requests:</label>
                <input type="text" name="specialRequests" id="specialRequests">
            </p>

            <input type="submit" name="submit" value="Submit">
        </form>
    </center>
</body>
  
</html>
    <center>
        <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => hotelsystem
        $conn = mysqli_connect("localhost", "root", "", "hotelsystem");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        
        if(isset($_REQUEST['submit'])){
        // Taking all 5 values from the form data(input)
        $RoomNo = $_REQUEST['RoomNo'];
        $check_in_date =  $_REQUEST['check_in_date'];
        $check_out_date = $_REQUEST['check_out_date'];
        $checkout_time = $_REQUEST['checkout_time'];
        $guest_id = $_REQUEST['guest_id'];
        $adults = $_REQUEST['adults'];
        $children = $_REQUEST['children'];
        $reservation_type_id = $_REQUEST['reservation_type_id'];
        $specialRequests = $_REQUEST['specialRequests'];
          
        // Performing insert query execution
        // here our table name is reservation
        $sql =  "INSERT INTO reservation(RoomNo, check_in_date, check_out_date, checkout_time, guest_id, adults, children, reservation_type_id, specialRequests) VALUES('$RoomNo', '$check_in_date', '$check_out_date', '$checkout_time', '$guest_id', '$adults', '$children', '$reservation_type_id', '$specialRequests')";

        if(mysqli_query($conn, $sql)){
            echo "<h3>Data stored in a database successfully. 
                </h3>"; 

        } else{
            echo "ERROR: Hush! Sorry $sql. " 
                . mysqli_error($conn);
        }
	}
          
        // Close connection
        mysqli_close($conn);
        ?>
    </center>
</body>
  
</html>