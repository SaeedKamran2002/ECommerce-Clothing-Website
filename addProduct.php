<?php include "admin_header.php" ?>

<?php
require_once 'conn.php';

if (isset($_POST['add'])) 
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
                mysqli_query($conn, "INSERT INTO `product` VALUES('', '$pr_name', '$pr_qty', '$pr_description', '$pr_price', '$pr_actual_price', '$image', '$location')") or die(mysqli_error());
                echo "<script type='text/javascript'>alert('Product added successfully!')</script>";
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

<h1 class="text-center">Add Product Details </h1>

<div class="container">
    <form action="" method="post" enctype="multipart/form-data">

        <div class="form-group">
            <label for="pr_name" class="form-label">Product Name * </label>
            <input type="text" name="pr_name" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pr_qty" class="form-label">Quantity * </label>
            <input type="number" name="pr_qty" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pr_description" class="form-label">Product Description * </label>
            <input type="text-area" name="pr_description" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pr_price" class="form-label">Selling Price * </label>
            <input type="number" name="pr_price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="pr_actual_price" class="form-label">Actual Price * </label>
            <input type="number" name="pr_actual_price" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image" class="form-label">Upload Product Images * </label>
            <input type="file" name="image" id="image" class="form-control" required>
        </div>

        <div class="form-group">
            <input type="submit" name="add" id="add" class="btn btn-primary mt-2" value="Add">
        </div>
    </form>

</div>

<?php include "admin_footer.php" ?>