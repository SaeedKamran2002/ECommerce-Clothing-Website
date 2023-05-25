<?php include "admin_header.php" ?>

<div class="container">
    <br>
    <h1 class="text-center">Orders</h1>

    <br>

    <table class="table table-striped table-bordered table-hover">
        <thead class="table-dark">

            <tr>
                <th scope="col">Order ID</th>
                <th scope="col">User ID</th>
                <th scope="col">Product ID</th>
                <th scope="col">Product Qunatity</th>
                <th scope="col">Sell Price</th>
                <th scope="col">Total Price</th>
                <th scope="col">Payment Method</th>
                <th  scope="col" colspan="3" class="text-center">Operations</th>
            </tr>

        </thead>
        <tbody>
            <tr>

                <?php

                require_once 'conn.php';

                $query = "SELECT * FROM orders";
                $view_users = mysqli_query($conn, $query);
                $totalOrdersPrice = 0;
                $totalBuyingPrice = 0;


                while ($row = mysqli_fetch_assoc($view_users)) {
                    $orderid = $row['orderId'];
                    $userid = $row['userId'];
                    $productid = $row['productId'];
                    $productQty = $row['qty'];
                    $sellPrice = $row['sellPrice'];
                    $totalprice = $row['totalPrice'];
                    $payment = $row['payment'];
                    $totalOrdersPrice += $totalprice;


                    echo "<tr >";

                    echo " <th scope='row' >{$orderid}</th>";
                    echo " <td > {$userid}</td>";
                    echo " <td > {$productid}</td>";
                    echo " <td >{$productQty} </td>";
                    echo " <td > {$sellPrice}</td>";
                    echo " <td > {$totalprice}</td>";
                    echo " <td > {$payment}</td>";
                    echo " <td  class='text-center'>  <a href='deleteOrder.php?delete={$orderid}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              

                    echo " </tr> ";
                }

                $query2 = "SELECT * FROM product";
                $view_users2 = mysqli_query($conn, $query2);


                while ($row = mysqli_fetch_assoc($view_users2)) {
                    $actualPrice = $row['product_actual_price'];
                    $qty = $row['product_qty'];   

                    $totalBuyingPrice += ($actualPrice*$qty);
                }
                ?>
            </tr>
        </tbody>
    </table>

    <div class="h5 text-danger text-center">Total Order Price Is :
        <?php echo $totalOrdersPrice ?>
    </div>

    <div class="h5 text-danger text-center">Total Buying Price Is :
        <?php echo $totalBuyingPrice ?>
    </div>
    <br><br>            
    <?php $profit = $totalOrdersPrice - $totalBuyingPrice ;

        if($profit >= 0)
        {
            ?>
            <div class="h5 text-success text-center">Total Profit Is :
            <?php echo $profit ?>
            </div> 
            <?php       
        }    
        
        else{
            ?>
            <div class="h5 text-danger text-center">Total Loss Is :
            <?php echo $profit ?>
            </div> 
            <?php       
        }            
    ?>  
</div>

<div class="container text-center">
            <center><a href="productView.php" class="btn btn-warning mt-5"> Back </a></center>
        <div>



<?php include "admin_footer.php" ?>