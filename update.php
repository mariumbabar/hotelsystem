<!DOCTYPE html>
<html>
  
<head>
    <title>Update Page </title>
</head>
  
<body>
    <!DOCTYPE html>
<html lang="en">
  
<head>
    <title>Hotel Reservation UI</title>
</head>
  
<body>
    <center>
        <h1>Add Facilities</h1>
  
        <form action="update.php" method="post">
              
              
<p>
                <label for="roomTypeID">Room Type ID:</label>
                <input type="number" name="roomTypeID" id="roomTypeID">
            </p>
  
  
  
              
              
<p>
                <label for="roomFacilities">Add New Facilities:</label>
                <input type="text" name="roomFacilities" id="roomFacilities">
            </p>
  
                

              
            <input type="submit" name="submit" value="Update">
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
        $roomTypeID = $_REQUEST['roomTypeID'];
        $roomFacilities =  $_REQUEST['roomFacilities'];
   
          
        // Performing insert query execution
        // here our table name is guests
        $sql =  "UPDATE room_type SET roomFacilities='" . $_POST['roomFacilities'] . "' WHERE roomTypeID='" . $_POST['roomTypeID'] . "'";

$message = "Record Modified Successfully";;

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