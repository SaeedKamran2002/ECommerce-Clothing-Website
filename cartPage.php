<?php include "userheader.php" ?>

    <br><br>

    <div class = "h1 text-success text-center">Cart</div>

  <div class="container">

    <br>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">

            <tr>
              <th  scope="col">Product Image</th>
              <th  scope="col">Product Name</th>
              <th  scope="col">Qunatity</th>
              <th  scope="col">Description</th>
              <th  scope="col">Sell Price</th>
              <th  scope="col" colspan="3" class="text-center">Operations</th>
            </tr>  

          </thead>
            <tbody>
              <tr>
 
          <?php

            require_once 'conn.php';

            $query2="SELECT * FROM cart";                 
            $view_cart= mysqli_query($conn,$query2);  
            $totalPrice = 0;

            
            while($row= mysqli_fetch_assoc($view_cart))
            {

                $prid = $row['prdouct_Id'];
                $prqty =  $row['productQty'];   

                $query="SELECT * FROM product WHERE product_Id = $prid";
                $view_users= mysqli_query($conn,$query);

                while($row1 = mysqli_fetch_assoc($view_users))
                {
                    $id = $row1['product_Id'];                
                    $name = $row1['product_name'];                
                    $description = $row1['product_description']; 
                    $sellPrice = $row1['product_sell_price']; 
                    $imgLocation = $row1['product_image_location']; 
                    $totalPrice += ($sellPrice*$prqty);
                
                    echo "<tr >";
                    echo " <td><img src='".$imgLocation."' style='float:left; margin:5px;' width='50px' height='50px'/></td>";
                    echo " <td > {$name}</td>";
                    echo " <td > {$prqty}</td>";
                    echo " <td >{$description} </td>";
                    echo " <td > {$sellPrice}</td>";
  
                    echo " <td  class='text-center'>  <a href='deleteCart.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
                    echo " </tr> ";
                }  
            }
        ?>
              </tr>  
            </tbody>
        </table>

        <br><br>

        <div class = "h5 text-danger text-center">Total Bill IS : <?php echo $totalPrice ?> </div>

        <br>
        <a href = "confirmOrder.php"><center><button class="btn btn-danger">Confirm Order</button></center></a>
  </div>


<?php include "userfooter.php" ?>