<?php include "admin_header.php" ?>

<?php
require_once 'conn.php';

    if(isset($_GET['product_Id']))
    {
      $pr_id = $_GET['product_Id']; 
    }
      
    $query="SELECT * FROM product WHERE product_Id = $pr_id ";
    $view_users= mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($view_users))
    {
          $id = $row['product_Id'];                
          $name = $row['product_name'];        
          $qty = $row['product_qty'];         
          $description = $row['product_description']; 
          $sellPrice = $row['product_sell_price']; 
          $actualPrice = $row['product_actual_price']; 
          $imgName = $row['product_image_name']; 
          $imgLocation = $row['product_image_location']; 
    }
 
    if(isset($_POST['update'])) 
    {

        if(!empty($_FILES['image']))
        {
        
            $pr_name = $_POST['pr_name'];
            $pr_qty = $_POST['pr_qty'];
            $pr_description = $_POST['pr_description'];
            $pr_price = $_POST['pr_price'];
            $pr_actual_price = $_POST['pr_actual_price'];

            $image_name = $_FILES['image']['name'];
            $image_temp = $_FILES['image']['tmp_name'];
            $image_size = $_FILES['image']['size'];

            $exp = explode(".", $image_name);
            $ext = end($exp);
            $allowed_ext = array('jpg', 'jpeg', 'png', 'PNG');

            if (in_array($ext, $allowed_ext)) 
            {
                $image = time() . '.' . $ext;
                $location = "upload/" . $image;
                if ($image_size < 5242880) 
                {
                    move_uploaded_file($image_temp, $location);
                    mysqli_query($conn, "UPDATE `product` SET product_name = '{$pr_name}', product_qty = '{$pr_qty}', product_description = '{$pr_description}', product_sell_price = '{$pr_price}', product_actual_price = '{$pr_actual_price}', product_image_name = '{$image}', product_image_location = '{$location}' WHERE product_ID = $pr_id");
                    echo "<script type='text/javascript'>alert('Product Updated successfully!')</script>";
                } 

                else 
                {
                    echo "error";
                }
            } 
            
            else 
            {
                echo "error";
            }

        }

        else
        {
            echo "<script type='text/javascript'>alert('Image Form Empty')</script>";
        }
}             
?>

<br>

<h1 class="text-center">Update Product Details </h1>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="pr_name" class="form-label">Product Name * </label>
            <input type="text" name="pr_name" class="form-control" value="<?php echo $name  ?>">
        </div>

        <div class="form-group">
            <label for="pr_qty" class="form-label">Quantity * </label>
            <input type="number" name="pr_qty" class="form-control" value="<?php echo $qty  ?>">
        </div>

        <div class="form-group">
            <label for="pr_description" class="form-label">Product Description * </label>
            <input type="text-area" name="pr_description" class="form-control" value="<?php echo $description  ?>">
        </div>

        <div class="form-group">
            <label for="pr_price" class="form-label">Selling Price * </label>
            <input type="number" name="pr_price" class="form-control" value="<?php echo $sellPrice  ?>">
        </div>

        <div class="form-group">
            <label for="pr_actual_price" class="form-label">Actual Price * </label>
            <input type="number" name="pr_actual_price" class="form-control" value="<?php echo $actualPrice  ?>">
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Upload Product Images * </label>
            <input type="file" name="image" id="image" class="form-control" value="<?php echo $imgName  ?>">
        </div>

        <div class="form-group">
            <input type="submit" name="update" id="update" class="btn btn-primary mt-2" value="Update">
        </div>
    </form>
</div>


    <div class="container text-center mt-5">
      <a href="productView.php" class="btn btn-warning mt-5"> Back </a>
    <div>

<?php include "admin_footer.php" ?>