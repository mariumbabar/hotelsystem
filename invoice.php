 <!DOCTYPE html>
<html lang="en">
<head>
   <title>Invoice Generation</title>
   

   <!-- custom css file link  -->
  <link rel="stylesheet" href="search.css">

</head>
<body>
<div class="container">
 <div class="product-display">
    <?php
  
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "hotelsystem");
          
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
        ?>
    <div class="container">
<form action="invoice.php" class="search-bar" method="GET">
                                        <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Enter Reservation ID">
                                        <button type="submit" class="btn btn-primary"><img src="search.png"></button>
                                    </div>
                                </form>

<?php
            if(isset($_GET['search']))
            {
             $filtervalues = $_GET['search'];
             $query = "SELECT * FROM payment WHERE CONCAT(Reservation_ID) LIKE '%$filtervalues%' ";
             $query_run = mysqli_query($conn, $query);

             if(mysqli_num_rows($query_run) > 0)
             {
               foreach($query_run as $rows)
                {
                ?>
            <tr>
            <td><b> Invoice </b></td><br>
            <tr>Additional Services: <?= $rows['addServices_ID']; ?></tr><br>
            <tr>Room Charge: AED <?= $rows['RoomCharge']; ?></tr><br>
            <tr>Room Service Charge: AED<?= $rows['RoomServiceCharge']; ?></tr><br>
            <tr>Late Checkout Charge: AED<?= $rows['IfLateCheckoutCharge']; ?></tr><br>
            <tr>Total Charge: AED<?= $rows['TotalCharge']; ?></tr><br>
            <tr>Payment Date: <?= $rows['PaymentDate']; ?></tr><br>
            <tr>Credit Card Number: <?= $rows['CreditCardNo']; ?></tr><br><br><br>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td>No Record Found</td>
                                                </tr>
                                              </tr>
                                          </div>
                                             </div>
                                            <?php
                                        }
                                    }