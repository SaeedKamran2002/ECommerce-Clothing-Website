<?php 
    require_once 'conn.php';

    if(isset($_GET['delete']))
    {
         $prId= $_GET['delete'];

         $query = "DELETE FROM cart WHERE prdouct_Id = {$prId}"; 
         $delete_query= mysqli_query($conn, $query);

         echo '<script type="text/javascript">'; 
        echo 'alert("Product Deleted successfully!");'; 
        echo 'window.location.href = "cartPage.php";';
        echo '</script>';
    }
?>
