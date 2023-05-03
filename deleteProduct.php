<?php 
    require_once 'conn.php';

    if(isset($_GET['delete']))
    {
         $prId= $_GET['delete'];

         // SQL query to delete data from user table where id = $userid
         $query = "DELETE FROM product WHERE product_Id = {$prId}"; 
         $delete_query= mysqli_query($conn, $query);
         
         header("Location: productView.php");
    }
?>
