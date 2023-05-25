<?php include "userheader.php" ?>

<style>
    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .row>div[class*='col-'] {
        display: flex;
    }
</style>

<?php


$query = "SELECT * FROM product";
$view_users = mysqli_query($conn, $query);

?>
<br><br>

<!-- <div class ="container d-flex flex-row" style="justify-content: space-between;"> -->
<div class="container">
    <div class="row">
        <?php


        while ($row = mysqli_fetch_assoc($view_users)) {

            $id = $row['product_Id'];
            $name = $row['product_name'];
            $qty = $row['product_qty'];
            $description = $row['product_description'];
            $sellPrice = $row['product_sell_price'];
            $actualPrice = $row['product_actual_price'];
            $imgLocation = $row['product_image_location'];

            ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 mt-3">
                <div class="card mt-3" style="width: 100%; height: 100%;">
                    <img class="card-img-top" style="height: 50%;" src="<?php echo $imgLocation ?>" alt="Card image cap">
                    <div class="card-body text-center">
                        <h5 class="card-title h5 text-capitalize">
                            <?php echo $name ?>
                        </h5>
                        <p class="card-text text-center">
                        <p class="fw-bold">Price =
                            <?php echo $sellPrice ?>
                        </p>
                        <label for="descriptionPara" class="fw-bold fst-italic">Description:</label>
                        <p class="fw-bold fst-italic" id="descriptionPara">
                            <?php echo $description ?>
                        </p>

                        </p>

                        <?php
                        if ($qty <= 0) {

                            ?>
                            <p class="fw-bold fst-italic bg-danger text-white">OUT OF STOCK</p>
                        <?php

                        } else {
                            ?>
                            <form action="cart.php" method="post">

                                <label for="size" class="fw-bold fst-italic">Available Sizes:</label>
                                <br>

                                <script>
                                    function updateSize(value) {
                                        document.getElementById("sizeInput").value = value;
                                    }
                                </script>

                                <div class="btn-group" role="group" aria-label="Sizes" id="size">
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="updateSize('small')">S</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="updateSize('medium')">M</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="updateSize('Large')">L</button>
                                    <button type="button" class="btn btn-outline-secondary"
                                        onclick="updateSize('XL')">XL</button>
                                </div>

                                <br><br>

                                <input type="hidden" name="sizeInput" id="sizeInput">

                                <input type="number" name="orderQty" id="orderQty" class="w-50" min="1"><br>
                                <input type="hidden" name="prId" id="prId" value="<?php echo $id ?>">

                                <input type="submit" class="btn btn-danger mt-3 text-uppercase" style="border-radius: 16px"
                                    id="submit" name="submit" value="Add To Cart">

                            </form>
                        <?php
                        }
                        ?>




                    </div>
                </div>
            </div>



            <?php
        }
        ?>

    </div>
</div>

<?php include "userfooter.php" ?>