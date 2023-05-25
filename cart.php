<?php
require_once 'conn.php';

if (isset($_POST['submit'])) 
{
    session_start();

    if (isset($_SESSION["userId"])) 
    {
        $userId = $_SESSION["userId"]; 
    }

    
    $orderQty = $_POST['orderQty'];
    $pr_id = $_POST['prId'];
    $sizeInput = $_POST['sizeInput'];

    
    $query = "SELECT * FROM product where product_Id = $pr_id";
    $view_users = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($view_users)) 
    {
        $qty = $row['product_qty'];

        if($orderQty>$qty)
        {
            $message = "This Much Quantity Not Available";
            echo "<script>alert('$message'); window.location.href='shop.php';</script>";
            exit();
        }
    } 

    mysqli_query($conn, "INSERT INTO `cart` VALUES('$userId', '$pr_id', '$orderQty')");


    echo '<script type="text/javascript">'; 
    echo 'alert("Product added to Cart successfully!");'; 
    echo 'window.location.href = "shop.php";';
    echo '</script>';


}
?>