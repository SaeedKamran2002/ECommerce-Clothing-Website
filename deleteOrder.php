<?php 
    require_once 'conn.php';

    if(isset($_GET['delete']))
    {
         $prId= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM orders WHERE orderId = {$prId}"; 
         $delete_query= mysqli_query($conn, $query);
         
         header("Location: order.php");
    }
?>
