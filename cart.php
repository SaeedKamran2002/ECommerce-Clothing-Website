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
    

    mysqli_query($conn, "INSERT INTO `cart` VALUES('$userId', '$pr_id', '$orderQty')");


    echo '<script type="text/javascript">'; 
    echo 'alert("Product added to Cart successfully!");'; 
    echo 'window.location.href = "shop.php";';
    echo '</script>';


}
?>