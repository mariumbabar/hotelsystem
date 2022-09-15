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
        <h1>Make Payment</h1>
  
        <form action="payments.php" method="post">
              
              
<p>
                <label for="invoiceNo">Invoice Number:</label>
                <input type="number" name="invoiceNo" id="invoiceNo">
            </p>
  
  
  
              
              
<p>
                <label for="Reservation_id">Reservation ID:</label>
                  <input type="number" name="Reservation_id" id="Reservation_id">
                
            </p>
  
                
<p>
                <label for="addServices_ID">Additional Services ID:</label>
               <select id="addServices_ID" name="addServices_ID">
                    <option value="0">no services - 0/AED</option>
                    <option value="1">Room Delivery - 50/AED</option>
                    <option value="2">Tourist Guide - 70/AED</option>
                    <option value="3">Car Rental - 150/AED</option>
                    <option value="4">Taxi Services - 30/AED</option>
                </select>
            </p>
                
              
<p>
                <label for="RoomCharge">Standard Room Charge:</label>
                <input type="number" name="RoomCharge" id="RoomCharge">
            </p>
  
                
<p>
                <label for="RoomServiceCharge">Room Service Charge:</label>
                <input type="number" name="RoomServiceCharge" id="RoomServiceCharge">
            </p>
              
<p>
                <label for="IfLateCheckoutCharge">Late Checkout Charge:</label>
                <input type="number" name="IfLateCheckoutCharge" id="IfLateCheckoutCharge">
            </p>


 <p>
                <label for="TotalCharge">Total Charge:</label>
                <input type="number" name="TotalCharge" id="TotalCharge">
            </p>

<p>
                <label for="PaymentDate">Payment Date:</label>
                <input type="date" name="PaymentDate" id="PaymentDate">
            </p>


<p>
                <label for="CreditCardNo">Credit Card Number:</label>
                <input type="number" name="CreditCardNo" id="CreditCardNo">
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
        $invoiceNo = $_REQUEST['invoiceNo'];
        $Reservation_id =  $_REQUEST['Reservation_id'];
        $addServices_ID = $_REQUEST['addServices_ID'];
        $RoomCharge = $_REQUEST['RoomCharge'];
        $RoomServiceCharge = $_REQUEST['RoomServiceCharge'];
        $IfLateCheckoutCharge = $_REQUEST['IfLateCheckoutCharge'];
        $TotalCharge = $_REQUEST['TotalCharge'];
        $PaymentDate = $_REQUEST['PaymentDate'];
        $CreditCardNo = $_REQUEST['CreditCardNo'];
          
        // Performing insert query execution
        // here our table name is payment
        $sql =  "INSERT INTO payment(invoiceNo, Reservation_id, addServices_ID, RoomCharge, RoomServiceCharge, IfLateCheckoutCharge, TotalCharge, PaymentDate, CreditCardNo) VALUES('$invoiceNo', '$Reservation_id', '$addServices_ID', '$RoomCharge', '$RoomServiceCharge', '$IfLateCheckoutCharge', '$TotalCharge', '$PaymentDate', '$CreditCardNo')";

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