<?php include "admin_header.php" ?>

  <div class="container">
    <br>
    <h1 class="text-center" >PRODUCTS</h1>

    <br>

        <table class="table table-striped table-bordered table-hover">
          <thead class="table-dark">

            <tr>
              <th  scope="col">Product Image</th>
              <th  scope="col">Product ID</th>
              <th  scope="col">Product Name</th>
              <th  scope="col">Qunatity</th>
              <th  scope="col">Description</th>
              <th  scope="col">Sell Price</th>
              <th  scope="col">Actual Price</th>
              <th  scope="col" colspan="3" class="text-center">Operations</th>
            </tr>  

          </thead>
            <tbody>
              <tr>
 
          <?php

            require_once 'conn.php';

            $query="SELECT * FROM product";               
            $view_users= mysqli_query($conn,$query);    

            
            while($row= mysqli_fetch_assoc($view_users))
            {
              $id = $row['product_Id'];                
              $name = $row['product_name'];        
              $qty = $row['product_qty'];         
              $description = $row['product_description']; 
              $sellPrice = $row['product_sell_price']; 
              $actualPrice = $row['product_actual_price']; 
              $imgLocation = $row['product_image_location']; 
                   

              echo "<tr >";
              echo " <td><img src='".$imgLocation."' style='float:left; margin:5px;' width='50px' height='50px'/></td>";
              echo " <th scope='row' >{$id}</th>";
              echo " <td > {$name}</td>";
              echo " <td > {$qty}</td>";
              echo " <td >{$description} </td>";
              echo " <td > {$sellPrice}</td>";
              echo " <td > {$actualPrice}</td>";

              echo " <td class='text-center' > <a href='updateProduct.php?edit&product_Id={$id}' class='btn btn-secondary'><i class='bi bi-pencil'></i> EDIT</a> </td>";

              echo " <td  class='text-center'>  <a href='deleteProduct.php?delete={$id}' class='btn btn-danger'> <i class='bi bi-trash'></i> DELETE</a> </td>";
              echo " </tr> ";
            }  
        ?>
              </tr>  
            </tbody>
        </table>
  </div>


<?php include "admin_footer.php" ?>