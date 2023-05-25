<?php include "userheader.php" ?>

    <br><br>

    <div class = "h1 text-success text-center">Checkout Page</div>
<?php

require_once 'conn.php';

$userId = $_SESSION["userId"]; 
$query3 = "SELECT * FROM users WHERE id = $userId";
$view_users3 = mysqli_query($conn, $query3);

while ($row2 = mysqli_fetch_assoc($view_users3)) 
{
    $name  = $row2['username'];
    $email  = $row2['email'];
    $phNo  = $row2['phoneNo'];
    $address  = $row2['address'];
}

if(isset($_POST['confirm'])) 
    {
        $address = $_POST['address'];
        $phoneNo = $_POST['phNo'];
        $payment = $_POST['payment'];
    
        mysqli_query($conn, "UPDATE `users` SET address = '{$address}', phoneNo = '{$phoneNo}' WHERE id = $userId");

        header('Location: confirmOrder.php?param=' . urlencode($payment));
        
    } 


?>

<br>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">

        <h2>Shipping Information</h2>

        <br>

        <div class="form-group">
            <label for="name" class="form-label">Your Name</label>
            <input type="text" name="name" class="form-control" value="<?php echo $name  ?>">
        </div>

        <br>

        <div class="form-group">
            <label for="email" class="form-label">Your Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $email  ?>">
        </div>

        <br>

        <div class="form-group">
            <label for="address" class="form-label">Your Address</label>
            <input type="text" name="address" class="form-control" value="<?php echo $address  ?>">
        </div>

        <br>

        <div class="form-group">
            <label for="phNo" class="form-label">Your PhoneNo</label>
            <input type="text" name="phNo" class="form-control" value="<?php echo $phNo  ?>">
        </div>

        <br>

        <h2>Payment Method</h2>
        <br>

        <div class="form-group">
            <label for="payment" class="form-check-label">Select Payment Method: </label>
            <input type="radio" name="payment" class="form-check-input" value="Cash" required> Cash On Delievery
        </div>

        <br>

        <div class="form-group">
            <input type="submit" name="confirm" id="confirm" class="btn btn-primary mt-2" value="Confirm Order">
        </div>
    </form>
</div>


    <div class="container text-center mt-5">
      <a href="cartPage.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<?php include "userfooter.php" ?>