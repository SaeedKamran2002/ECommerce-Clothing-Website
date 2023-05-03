<?php

require_once 'conn.php';

$query2 = "SELECT * FROM cart";
$view_cart = mysqli_query($conn, $query2);
$totalPrice = 0;


while ($row = mysqli_fetch_assoc($view_cart)) {
    $userId = $row['userid'];
    $prid = $row['prdouct_Id'];
    $prqty = $row['productQty'];

    $query = "SELECT * FROM product WHERE product_Id = $prid";
    $view_users = mysqli_query($conn, $query);

    while ($row1 = mysqli_fetch_assoc($view_users)) {
        $sellPrice = $row1['product_sell_price'];
        $totalPrice += ($sellPrice * $prqty);
        $qty = $row1['product_qty'];
        $updatedQty = $qty - $prqty;

        mysqli_query($conn, "INSERT INTO `orders` VALUES('', '$userId', '$prid', '$prqty', '$sellPrice', '$totalPrice')") or die(mysqli_error());
        mysqli_query($conn, "UPDATE `product` SET product_qty = '{$updatedQty}' WHERE product_ID = $prid");
    }

}

mysqli_query($conn, "TRUNCATE TABLE cart") or die(mysqli_error());

echo '<script type="text/javascript">';
echo 'alert("Your Order Has Been Confirmed! It will be delivered to your address soon");';
echo 'window.location.href = "shop.php";';
echo '</script>';

?>