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
        <h1>Guest Details Entry</h1>
  
        <form action="guests.php" method="post">
              
              
<p>
                <label for="firstName">First Name:</label>
                <input type="text" name="firstName" id="firstName">
            </p>
  
  
  
              
              
<p>
                <label for="lastName">Last Name:</label>
                <input type="text" name="lastName" id="lastName">
            </p>
  
                
<p>
                <label for="Address">Address:</label>
                <input type="text" name="address" id="address">
            </p>
  
                
              
<p>
                <label for="emailAddress">Email Address:</label>
                <input type="text" name="email" id="email">
            </p>
  
                
<p>
                <label for="phone">Phone Number:</label>
                <input type="text" name="phone" id="phone">
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
        $firstName = $_REQUEST['firstName'];
        $lastName =  $_REQUEST['lastName'];
        $address = $_REQUEST['address'];
        $email = $_REQUEST['email'];
        $phone = $_REQUEST['phone'];
          
        // Performing insert query execution
        // here our table name is guests
        $sql =  "INSERT INTO guests( firstName, lastName, address, email, phone) VALUES('$firstName', '$lastName', '$address', '$email', '$phone')";

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